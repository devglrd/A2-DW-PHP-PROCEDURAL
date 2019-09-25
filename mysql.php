<?php

echo "------------------- EXO 1 ------------------- <br> <br>";
## Je voudrais pouvoir me connecter a ma base de donnée
## VERIFIER BIEN LE NOM DE VOTRE BASE DE DONNEE
## TIPS :
# - MAMP => user : root | mdp : root
# - WAMP => user : root | mdp :

//$pdo = new PDO();

echo "------------------- EXO 2 ------------------- <br> <br>";
## Je voudrais pouvoir me connecter a ma base de donnée
## Mais que vous regardiez si un erreur c'est produite lors de la connexion, et si il y a un erreur l'afficher
## TIPS : https://www.developpez.net/forums/anocode.php?id=2beaa3cf20b92207f29d6472137a4691


echo "------------------- EXO 2 ------------------- <br> <br>";
## Je voudrais crée 2 tables, une tables "personnages" et une table "types" dans la base de donnée crée précedement
## DANS LA TABLE PERSONNAGES JE VEUX
# UNE COLUMN ID EN AUTO_INCREMENT
# UNE COLUMN NAME DE TYPE : VARCHAR 255
# UNE COLUMN ATK DE TYPE : INT 11
# UNE COLUMN type_id DE TYPE : INT 11 ET LE RENDRE NULLABLE
# UNE COLUMN PV DE TYPE : INT 11 ET METTRE PAR DEFAUT LA VALEUR 100

## DANS LA TABLE TYPE JE VEUX
# UNE COLUMN ID EN AUTO_INCREMENT
# UNE COLUMN NAME DE TYPE : VARCHAR 255
# UNE COLUMN BONUS DE TYPE : INT 11


echo "------------------- EXO 3 ------------------- <br> <br>";
## JE VOUDRAIS CREE UNE ENTREE DANS MA TABLE PERSONNAGES AVEC COMME NAME = "Perso 1" , ATK = 100;
## UTILISER L'OBJ PDO POUR CREE UNE LIGNE EN BASE DE DONNEE


echo "------------------- EXO 4 ------------------- <br> <br>";
## JE VOUDRAIS CREE UNE ENTREE DANS MA TABLE TYPE AVEC COMME NAME = "Feu" , Bonus = 10;
## JE VOUDRAIS CREE UNE AUTRE ENTREE DANS MA TABLE TYPE AVEC COMME NAME = "Eau" , Bonus = 20;
## UTILISER L'OBJ PDO POUR CREE UNE LIGNE EN BASE DE DONNEE


echo "------------------- EXO 5 ------------------- <br> <br>";
## JE VOUDRAIS CREE UNE LIGNE DANS LA TABLE PERSONNAGE POUR CHAQUE ENTREE DE MON TABLEAU
## LA CLE CORRESPOND AU NOM
## LA VALEUR A L'ATK
## UTILISER L'OBJ PDO POUR CREE UNE LIGNE EN BASE DE DONNEE

$a = ["Mage Royal" => 10, "Mage Sanguinaire" => 30, "Mage Illusioniste" => 90];

echo "------------------- EXO 6 ------------------- <br> <br>";
## CREE UNE ENTREE DANS LA TABLE PERSONNAGE AVEC LES VARIABLES $a et $b
## AVEC $a COMME NAME et $b COMME ATK
## UTILISER L'OBJ PDO POUR CREE UNE LIGNE EN BASE DE DONNEE
$a = "Personnage Puissant";
$b = "203";


echo "------------------- EXO 7 ------------------- <br> <br>";
## RECUPERER TOUT LES PERSONNAGE DE LA TABLES PERSONNAGES ET AFFICHER POUR CHAQUE PERSONNAGE SON ATK ET SON NOM
## UTILISER L'OBJ PDO POUR RECUPERER LES INFORMATIONS DE LA BASE DE DONNEE


echo "------------------- EXO 8 ------------------- <br> <br>";
## RECUPERER TOUT LES PERSONNAGES DE LA TABLE PERSONNAGES MAIS ORDONER LES PAR ID DESCENDANT ET LES AFFICHER UN A UN EN REVENANT A LA LIGNE POUR CHAQUE
## UTILISER L'OBJ PDO POUR RECUPERER LES INFORMATIONS DE LA BASE DE DONNEE


echo "------------------- EXO 9 ------------------- <br> <br>";
## RECUPERER TOUT LES TYPES DE LA TABLE TYPES ET LES AFFICHER UN A UN EN REVENANT A LA LIGNE POUR CHAQUE
## UTILISER L'OBJ PDO POUR RECUPERER LES INFORMATIONS DE LA BASE DE DONNEE


echo "------------------- EXO 10 ------------------- <br> <br>";
## CREE UN FORMULAIRE HTML AVEC UN 3 input
#  input type text avec le name = nom
# input type number avec le name = atk
# un selecteur avec comme nom = type

echo "------------------- EXO 11 ------------------- <br> <br>";
## CREE UN FORMULAIRE HTML AVEC UN 3 input
#  input type text avec le name = nom
# input type number avec le name = atk
# un selecteur avec comme nom = type
## AJOUTER UN BOUTON VALIDER AU FORMULAIRE QUI A LE TYPE SUBMIT
## LORSQUE L'on SOUMET LE FORMULAIRE JE VEUX QUE VOUS AFFICHIEZ CHAQUE ENTREE DE LA VARIABLE $_POST
## !TIPS : Si vous avez oubliez ce que contient votre variable $_POST alors pensez a faire un dd($_POST) (mais pensez a require l'autoload en haut de ce fichier.)


echo "------------------- EXO 12 ------------------- <br> <br>";
## REPRENDRE LE FORMULAIRE FAIT AU DESSUS, AU NIVEAU DU SELECTEUR FAIRE UN FOREACH POUR AFFICHER DANS LE SELECTEUR TOUT LES TYPES DISPONIBLE DANS LA BASE DE DONNEES
?>

<body>
<select name="" id="">
    <option value="value1">Valeur 1</option>
</select>
</body>
<?php

echo "------------------- EXO 12 ------------------- <br> <br>";
## REPRENDRE LE FORMULAIRE FAIT AU DESSUS, ET ENREGISTRER UNE ENTREE DANS LA TABLE PERSONNAGE AVEC LES INFORMATION RECUPERER DANS LE FORMULAIRE HTML
## JE VEUX ASSOCIEZ LA VALEUR DU SELCECT A LA COLLUMN type_id dans la table PERSONNAGE











