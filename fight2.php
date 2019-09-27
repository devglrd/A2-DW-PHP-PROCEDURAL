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
    $idPerso1 = $_POST['perso1'];
    $idPerso2 = $_POST['perso2'];
    // RECUPERER LES INFO DE PERSO 1 ET PERSO2
    $dbPerso1 = getPerso($idPerso1, $pdo);
    $dbPerso2 = getPerso($idPerso2, $pdo);
    // SOUSTRAIRE LES ATK DE PERSO2 AU PV DE PERSO1
    // SOUSTRAIRE LES ATK DE PERSO1 AU PV DE PERSO2
    
    $pvPerso1 = $dbPerso1->pv - $dbPerso2->atk;
    $pvPerso2 = $dbPerso2->pv - $dbPerso1->atk;
    
    $newPerso1 = updatePvPerso($idPerso1, $pvPerso1, $pdo);
    $newPerso2 = updatePvPerso($idPerso2, $pvPerso2, $pdo);
    
    
    echo $newPerso1->name . "a perdu " . $newPerso2->atk . "PV <br> il lui reste " . $newPerso1->pv . " PV <br>";
    echo $newPerso2->name . "a perdu " . $newPerso1->atk . "PV <br> il lui reste " . $newPerso2->pv . " PV <br>";
    
}

function updatePvPerso($id, $pv, $pdo)
{
    $query = $pdo->prepare("UPDATE personnages SET pv = :newPv WHERE id = :id");
    $query->execute(["newPv" => $pv, "id" => $id]);
    $state = $query->fetch(PDO::FETCH_OBJ);
    
    return getPerso($id, $pdo);
}

function getPerso($id, $pdo)
{
    $query = $pdo->prepare("SELECT * FROM personnages WHERE id = :id");
    $query->execute(['id' => $id]);
    
    return $query->fetch(PDO::FETCH_OBJ);
}

?>
<form action="" method="POST">
    <select name="perso1" id="">
        <option value="" disabled selected>Choissisez votre personnage</option>
        <?php foreach ($allPerso as $item) { ?>
            <option value="<?= $item->id ?>">
                <?= $item->name ?>
            </option>
        <?php } ?>
    </select>
    <select name="perso2" id="">
        <option value="" disabled selected>Choissisez votre personnage</option>
        <?php foreach ($allPerso as $item) { ?>
            <option value="<?= $item->id ?>"><?= $item->name ?></option>
        <?php } ?>
    </select>

    <button type="submit">Fight</button>
</form>
