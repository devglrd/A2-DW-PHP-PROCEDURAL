<?php
require __DIR__ . '/vendor/autoload.php';
echo "------------------- EXO 1 ------------------- <br> <br>";
## Je voudrais pouvoir afficher "Je suis en cours de PHP"
echo "Je suis en cours de PHP";

echo "------------------- EXO 2 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER "PLUS" si $a est superieure a 30;
$a = 31;
if ($a > 30) {
    echo "PLUS";
}

echo "------------------- EXO 2 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA TAILLE DE LA STRING QUE CONTIENT $a;
$a = "anticonstitutionnellement";

echo strlen($a);

echo "------------------- EXO 3 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE LA VARIABLE $a;
## SEULEMENT JE VOUDRAIS FAIRE UN SAUT DE LIT APRES CHAQUE ENTREE;
$a = ["Tomate", "Melon", "Banane", "Orange"];

foreach ($a as $item) {
    echo $item;
    echo "<br> <br>";
}


echo "------------------- EXO 4 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE LA VARIABLE $a;
## JE VOUDRAIS AFFICHER LA CLE DU TABLEAU AVANT DAFFICHER LENTREE DU TABLEAU
## !TIPS regarder la propierete *key* de la fonction foreach
$a = ["Tomate", "Melon", "Banane", "Orange"];

foreach ($a as $key => $item) {
    echo "clé : $key, valeur : $item";
    echo "<br> <br>";
}

echo "------------------- EXO 5 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE LA VARIABLE $a;
### MAIS SEULEMENT SI LA TAILLE DE LA STRING FAIT PLUS DE 6 ET EN REVENANT A LA LIGNE A CHAQUE FOIS
$a = ["Tomate", "Melon", "Banane", "Orange", "Fraise", "Mangue", "Poire", "Framboise"];

foreach ($a as $item) {
    if (strlen($item) > 6) {
        echo $item;
        echo "<br>";
    }
}

echo "------------------- EXO 6 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE LA VARIABLE $a;
### MAIS SANS UTILISER _LE MOT CLE FOREACH ET EN REVENANT A LA LIGNE A CHAQUE FOIS
$a = ["Tomate", "Melon", "Banane", "Orange", "Fraise", "Mangue", "Poire", "Framboise"];
for ($i = 0; $i < count($a); $i++) {
    echo $a[ $i ];
    echo "<br>";
}
echo implode($a, " <br> ");


$i = 0;
while ($i < count($a)) {
    echo $a[ $i ];
    $i++;
}


echo "------------------- EXO 7 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA VALEUR "name" du tableau $a
# TIPS : https://www.php.net/manual/fr/function.array.php
$a = ["name" => "Thomas"];
echo $a["name"];

echo "------------------- EXO 7 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA PHRASE "Je suis à L"iim" EN UTILISANT LA VARIABLE $a DANS LA STRING;
$a = "IIM";
echo "je suis a l'" . $a;


echo "------------------- EXO 8 ------------------- <br> <br>";
### JE VOUDRAIS REMPLACER "GOOGLE" PAR "AMAZON" DANS LA VARIABLE $a ET AFFICHER LA VARIABLE $a
$a = "GOOGLE est la plus grande entreprise du monde";
echo str_replace("GOOGLE", "AMAZON", $a);


echo "------------------- EXO 9 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER "TERNAIRE" SI $a est EGAL A "PHP" SANS UTILISE IF OU ELSE
## !TIPS : CHERCHER LES CONDITIONS *TERNAIRES* EN PHP
$a = "PHP";

$a = ($a === "PHP") ? "TERNAIRE" : "FAUX";
echo $a;

echo "------------------- EXO 10 ------------------- <br> <br>";
### JE VOUDRAIS EXECUTER LA FUNCTION HELLO
function hello()
{
    echo "Halo";
}

hello();


echo "------------------- EXO 11 ------------------- <br> <br>";
### JE VOUDRAIS EXECUTER LA FUNCTION HELLO2 ET RECUPERER LE RESULTAT DE LA FONCTION DANS UNE VARIABLE $a ET ENSUITE AFFICHER $a
function hello2()
{
    return "Halo";
}

$a = hello2();

echo "------------------- EXO 12 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER UNE PHRASE AVEC TOUTES LES ENTREES DU TABLES $a AVEC UN ESPACE ENTRE CHAQUE MOT;
$a = ["Le", "PHP", "c", "'", 'est', 'super'];

echo implode($a, " ");
foreach ($a as $item) {
    echo $item;
}


echo "------------------- EXO 13 ------------------- <br> <br>";
### JE VOUDRAIS RECUPERER UN TABLEAU DEPUIS LA STRING $a;
$a = "Le PHP c'est trop bien";

$a = explode(" ", $a);
var_dump($a);

echo "------------------- EXO 14 ------------------- <br> <br>";
### JE VOUDRAIS EXECUTER LA FUNCTION DISPLAY QUI AFFICHER L'ARGUMENT PASSER A LA FUNCTION
## ATTENTION VOUS DEVEZ CREE LA FUNCTION DISPLAY

function display($string)
{
    echo $string;
}

display("Toto");


echo "------------------- EXO 15 ------------------- <br> <br>";
### JE VOUDRAIS EXECUTER LA FUNCTION AVERAGE QUI FERAS LA MOYENNE DU TABLEAU PASSER EN PARAMETRE
#TIPS : chercher la function array_sum() sur la doc de PHP

function average($array)
{
    if (!empty($array))
        return array_sum($array) / count($array);
    
    return false;
}

$a = average([]);
echo $a;


echo "------------------- EXO 16 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER
# "i = 1" si est $i égal 1
# "i = 2" si $i est égal a 2
# "i = 3" si $i est égal a 3
# SI AUCUN DES CAS ALORS AFFICHER = "Aucune des posibilités"
## je veux que vous utilisiez le SWITCH de php
## !TIPS : https://www.php.net/manual/fr/control-structures.switch.php
$a = 1;
switch ($a) {
    case $a === 1:
        echo "i === 1";
        break;
    case $a === 2:
        echo "i === 2";
        break;
    case $a === 3:
        echo "i === 3";
        break;
    default:
        echo "Aucun";
        break;
}


echo "------------------- EXO 17 ------------------- <br> <br>";
### Si j'execute la function inverse en lui donnant 0 en parametre, la function me renvoie une Exception, je voudrais pouvoir recuperer cette exception et l'afficher
## !TIPS : UTILISER TRY CATCH EN PHP : https://www.php.net/manual/fr/language.exceptions.php
function inverse($x)
{
    if (!$x) {
        throw new Exception('Division par zéro.');
    }
    
    return 1 / $x;
}

try {
    echo inverse(0);
} catch (Exception $toto) {
    echo $toto->getMessage();
}


echo "------------------- EXO 18 ------------------- <br> <br>";
## JAI DEUX VARIABLES $a et $b
## JE VEUX EXECUTER UNE FONCTION QUI AFFECTERA A $a LA VALEUR DE $b ET$b LA VALEUR DE $a
## CETTE FUNCTION SAPPEL MY_SWAP
function my_swap($a, $b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
    
    return [$a, $b];
}

$a = 10;
$b = 20;
$newVar = my_swap($a, $b);
dd($newVar);






