<?php

require __DIR__ . "/vendor/autoload.php";

## DANS SE FICHIER JE VOUDRAIS

# UN FORMULAIRE HTML QUI ME PERMET DE CREE UN PERSONNAGE EN CHOISSANT SON TYPE

# UN FORMULAIRE AVEC
# - UN SELECTEUR QUI ME PERMET DE SELECTIONER UN PERSONNAGE DISPONIBLE DANS LA BASE DE DONNEE
# - UN SELECTEUR QUI ME PERMET DE SELECTIONER UN AUTRE PERSONNAGE DISPONIBLE DANS LA BASE DE DONNEE
# UN BOUTON FIGHT

# LORSQUE L'ON CLIQUE SUR LE BOUTON FIGHT, ON ENVOIE UN FORMULAIRE POST

# DANS SE FORMULAIRE POST JE VEUX QUE VOUS RECUPERIEZ LES DEUX PERSONNAGE CHOISIS DANS LES SELECTEUR HTML
# RECUPERER L'ATK DES PERSONNAGES, SOUSTRAIRE L'ATK DU PERSONNAGE AU PV DE LAUTRE PERSONNAGE (et vice versa)
# ENSUITE AFFICHER
#  - 1ER PERSONNAGE A PERDU TANT DE PV / PV ACTUEL :
#  - 2EME PERSONNAGE A PERDU TANT DE PV / PV ACTUEL :
$pdo = new PDO('mysql:host=127.0.0.1;dbname=PHP', "root", ""); // CONNEXION TO DB
$query = $pdo->prepare("SELECT * FROM personnages");
$query->execute();
$allPerso = $query->fetchAll(PDO::FETCH_OBJ);

if (!empty($_POST)) {
    $perso1 = $_POST['perso1'];
    $perso2 = $_POST['perso2'];
    $dbPerso1 = getPerso($perso1, $pdo);
    $dbPerso2 = getPerso($perso2, $pdo);
    $pvPerso1 = $dbPerso1->pv - $dbPerso2->atk;
    $pvPerso2 = $dbPerso2->pv - $dbPerso1->atk;
    
    $newPerso1 = updatePerso($perso1, $pvPerso1, $pdo);
    $newPerso2 = updatePerso($perso2, $pvPerso2, $pdo);
    
    echo $newPerso2->name . " à perdu " . $dbPerso1->atk . " pv il a donc actuellement " . $newPerso2->pv . "PV <br>";
    echo $newPerso1->name . " à perdu " . $dbPerso2->atk . " pv il a donc actuellement " . $newPerso1->pv . "PV <br>";
    
}

function updatePerso($idPerso, $pvPerson, $pdo)
{
    $query = $pdo->prepare("UPDATE personnages SET pv = :newPv WHERE id = :id");
    $query->execute(["id" => $idPerso, 'newPv' => $pvPerson]);
    $a = $query->fetch(PDO::FETCH_OBJ);
    $perso = getPerso($idPerso, $pdo);
    
    return $perso;
}

function getPerso($id, $pdo)
{
    $query = $pdo->prepare("SELECT * FROM personnages WHERE id = :id");
    $query->execute(["id" => $id]);
    $a = $query->fetch(PDO::FETCH_OBJ);
    
    return $a;
}

?>

<form action="" method="POST">
    <select name="perso1" id="">
        <option value="" selected disabled>Choissisez le perso 1</option>
        <?php foreach ($allPerso as $perso) { ?>
            <option value="<?= $perso->id ?>"><?= $perso->name ?> </option>
        <?php } ?>
    </select>

    <select name="perso2" id="">
        <option value="" selected disabled>Choissisez le perso 2</option>
        <?php foreach ($allPerso as $perso) { ?>
            <option value="<?= $perso->id ?>"><?= $perso->name ?> </option>
        <?php } ?>
    </select>

    <button type="submit">Fight</button>

</form>
