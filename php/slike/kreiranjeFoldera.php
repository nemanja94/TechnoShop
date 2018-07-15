<?php

echo "Pocinje - 3\n";

require "../baza/Database.php";

try {
    echo "PDO - 7\n";
    $pdo = Database::connect();

    echo "Upit - 10\n";
    $query = $pdo->prepare("SELECT `Artikl`.`artikl_sifra` FROM `TechnoShop`.`Artikl` ORDER BY `Artikl`.`artikl_sifra`");

    echo "Izvrsenje upita - 13\n";
    $query->execute();

    echo "Raskidanje konekcije - 16\n";
    Database::disconnect();
    //Dodati kod za kreiranje direktorijuma

    echo "While petlja - 20\n";
    while ($sifra = $query->fetch()) {
        $path = "/var/www/html/projects/TechnoShop/php/slike/" . $sifra['artikl_sifra'];
        if (mkdir($path, 0777, true)) {
            chmod($path, 0777);
            echo "<p style='color: green;'>Folder " . $sifra['artikl_sifra'] . " je kreiran.</p><br>";
        } else {
            echo "<p style='color: red;'>Folder " . $sifra['artikl_sifra'] . " nije kreiran.</p><br>";
        }
    }
    //header("Location: unosArtikl.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
