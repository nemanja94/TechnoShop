<?php

require_once('../baza/Database.php');

$id = htmlspecialchars($_GET['id']);

try {

    $pdo = Database::connect();

    $query = $pdo->prepare(
        'DELETE FROM `TechnoShop`.`Podkategorija` WHERE `podkategorija_id`= :id;'
    );

    $query->bindParam(':id', $id);

    $query->execute();

    Database::disconnect();

    header('Location: unosPodkategorija.php');

} catch (PDOException $e) {

    echo $e->getMessage();

}

?>