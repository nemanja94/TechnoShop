<?php

require_once('../baza/Database.php');

$id = htmlspecialchars($_GET['id']);

try {

    $pdo = Database::connect();

    //Pronadji sifru artikla koji se brise
    $pronadjiSifruArtikla = $pdo->prepare(
        'SELECT `TechnoShop`.`Artikl`.`artikl_sifra` FROM `TechnoShop`.`Artikl` WHERE `TechnoShop`.`Artikl`.`artikl_id` = :id;'
    );

    $pronadjiSifruArtikla->bindParam(':id', $id);

    $pronadjiSifruArtikla->execute();

    $sifraArtikla = null;

    $row = $pronadjiSifruArtikla->fetch();

    $sifraArtikla = $row['artikl_sifra'];

    ////////////////////////////////////////////////////////////////////////////////


    //Ukloni slike odabranog artikla
    $ukloniSlikeArtikla = $pdo->prepare(
        'DELETE FROM `TechnoShop`.`Slike` WHERE `TechnoShop`.`Slike`.`artikl_sifra` = :sifraArtikla;'
    );

    $ukloniSlikeArtikla->bindParam(':sifraArtikla', $sifraArtikla);

    $ukloniSlikeArtikla->execute();

    function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir") rrmdir($dir . "/" . $object); else unlink($dir . "/" . $object);
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }

    $folder = '../slike/' . $sifraArtikla;

    rrmdir($folder);

    ////////////////////////////////////////////////////////////////////////////////


    //Ukloni odabrani artikla
    $ukloniArtikl = $pdo->prepare(
        'DELETE FROM `TechnoShop`.`Artikl` WHERE `artikl_id` = :id;'
    );

    $ukloniArtikl->bindParam(':id', $id);

    $ukloniArtikl->execute();
    ////////////////////////////////////////////////////////////////////////////////


    Database::disconnect();

    header('Location: unosArtikl.php');

} catch (PDOException $e) {

    echo $e->getMessage();

}

?>