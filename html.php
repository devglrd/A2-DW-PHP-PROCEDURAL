<?php

require __DIR__ . "/vendor/autoload.php";

echo "------------------- EXO 1 ------------------- <br> <br>";
## Je voudrais pouvoir afficher "Je suis en cours de PHP" DANS UNE BALISE <p> HTML

?>
    <!doctype html>
    <body>
    <?php echo "<p>Je suis en cours de PHP</p>" ?>
    <p><?php echo "Je suis en cours de PHP" ?></p>

    </body>
<?php


echo "------------------- EXO 2 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA VALEUR DE $a DANS UN INPUT HTML
$a = "IIM";

?>
    <!doctype html>
    <body>
    <input type="text" value="<?php echo $a ?>">
    </body>
<?php

echo "------------------- EXO 2 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA VALEUR DE $a DANS LE HTML MAIS SANS UTILISER ECHO
## TIPS : https://stackoverflow.com/questions/2020445/what-does-mean-in-php
$a = "IIM";

?>
    <!doctype html>
    <body>
    <p><?= $a ?></p>
    </body>
<?php

echo "------------------- EXO 3 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE MON TABLEAU $a DANS UN ELEMENT <p> HTML
## !TIPS : UTILISER FOREACH
$a = ["Tomate", "Melon", "Banane", "Orange", "Fraise", "Mangue", "Poire", "Framboise"];

?>
    <!doctype html>
    <body>
    <?php foreach ($a as $item) { ?>
        <p><?= $item ?></p>
    <?php } ?>
    
    <?php foreach ($a as $item): ?>
        <p><?= $item ?></p>
    <?php endforeach; ?>
    </body>
<?php


echo "------------------- EXO 4 ------------------- <br> <br>";
### JE VOUDRAIS CREE UN FORMULAIRE HTML AVEC COMME METHOD POST
### JE VEUX METTRE UN INPUT DEDANS AVEC COMME VALEUR LA VALEUR DE $a JE VEUX UN BOUTON QUI PERMET DE SOUMMETRE LE FORMULAIRE
### JE VEUX QUE VOUS AFFICHIEZ LA VALEUR DE L'INPUT QUAND ON SOUMMET LE FORMULAIRE
$a = "Midi";

if (!empty($_POST) && isset($_POST)) {
    echo $_POST["nom"];
}

?>
    <!doctype html>
    <body>

    <form action="" method="POST">
        <input type="text" value="<?= $a ?>" name="nom">
        <button type="submit">Soumettre</button>
    </form>

    </body>
<?php


echo "------------------- EXO 4 ------------------- <br> <br>";
### JE VOUDRAIS CREE UN FORMULAIRE HTML AVEC COMME METHOD POST
### JE VEUX METTRE UN SELECTEUR A PLUSIEURS ENTREE DEDANS AVEC ET UN BOUTON QUI PERMET DE SOUMMETRE LE FORMULAIRE
### JE VEUX QUE VOUS AFFICHIEZ TOUT LES VALEURS DU SELECTEUR SELECTIONNER <?P<aQUAND ON SOUMMET LE FORMULAIRE
$a = "Midi";

if (!empty($_POST) && isset($_POST)) {
    
    foreach ($_POST["selecteur"] as $item) {
        echo $item . "<br>";
    }
}

?>
    <!doctype html>
    <body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file2">
        <select name="selecteur[]" id="" multiple>
            <option value="" disabled selected>Selectionner une option</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <button type="submit"> Ok</button>
    </form>
    </body>
<?php


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";