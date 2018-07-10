<?php

require '../baza/Database.php';

if (!empty($_POST)) {

    $id = htmlspecialchars($_GET['id']); //Ne moze da se menja u bazi

    $novNaziv = htmlspecialchars($_POST['naziv']); //Moze da se menja se u bazi
    $novaCena = htmlspecialchars($_POST['cena']); //Moze da se menja se u bazi
    $novOpis = htmlspecialchars($_POST['opis']); //Moze da se menja se u bazi
    $novaSifra = htmlspecialchars($_POST['sifra']); //Moze da se menja se u bazi

    try {

        $pdo = Database::connect();


        //Pronalazenje sifre artikla iz tabele Artikl po prosledjenom id
        $queryStaraSifraArtikla = $pdo->prepare(
            'SELECT 
                          TechnoShop.Artikl.artikl_sifra
                       FROM TechnoShop.Artikl
                       WHERE artikl_id = :stariId;'
        );

        $queryStaraSifraArtikla->bindParam("stariId", $id);

        $queryStaraSifraArtikla->execute();

        $rowStalaSifraArtikla = $queryStaraSifraArtikla->fetch();

        $staraSifraArtikla = $rowStalaSifraArtikla['artikl_sifra'];

        Database::disconnect();
        //Pronalazenje sifre artikla iz tabele Artikl po prosledjenom id


        //Promena polja u tabeli Artikl
        $pdo = Database::connect();

        $queryAzuriranjeArtikla = $pdo->prepare(
            'UPDATE TechnoShop.Artikl 
                          SET TechnoShop.Artikl.artikl_naziv = :naziv, 
                              TechnoShop.Artikl.artikl_opis = :opis, 
                              TechnoShop.Artikl.artikl_cena = :cena, 
                              TechnoShop.Artikl.artikl_sifra = :sifra 
                          WHERE TechnoShop.Artikl.artikl_id = :id;'
        );

        $queryAzuriranjeArtikla->bindParam(':naziv', $novNaziv);
        $queryAzuriranjeArtikla->bindParam(':cena', $novaCena);
        $queryAzuriranjeArtikla->bindParam(':opis', $novOpis);
        $queryAzuriranjeArtikla->bindParam(':sifra', $novaSifra);
        $queryAzuriranjeArtikla->bindParam(':id', $id);

        $queryAzuriranjeArtikla->execute();

        Database::disconnect();
        //Promena polja u tabeli Artikli


        //Promena sifra artikla, odnosno naziva direktorijuma u tabeli Slike
        $pdo = Database::connect();

        $queryAzuriranjeNazivaDierktorijuma = $pdo->prepare(
            'UPDATE TechnoShop.Slike 
                      SET TechnoShop.Slike.artikl_sifra = :novaSifra 
                      WHERE TechnoShop.Slike.artikl_sifra = :staraSifra;');

        $queryAzuriranjeNazivaDierktorijuma->bindParam(':staraSifra', $staraSifraArtikla);
        $queryAzuriranjeNazivaDierktorijuma->bindParam(':novaSifra', $novaSifra);

        $queryAzuriranjeNazivaDierktorijuma->execute();

        Database::disconnect();
        //Promena sifra artikla, odnosno naziva direktorijuma u tabeli Slike


        //Promena naziva direktorijuma u projektu
        rename('../slike/' . $staraSifraArtikla, '../slike/' . $novaSifra);
        //Promena naziva direktorijuma u projektu


        //Promena naziva slika u direktorijumu
        $pdo = Database::connect();

        $queryStariNazivSlike = $pdo->prepare(
            'SELECT
                        TechnoShop.Slike.slika
                      FROM TechnoShop.Slike
                      WHERE TechnoShop.Slike.artikl_sifra = :novaSifra;'
        );

        $queryStariNazivSlike->bindParam(':novaSifra', $novaSifra);

        $queryStariNazivSlike->execute();

        while ($rowStariNazivSlike = $queryStariNazivSlike->fetch()) {

            $sl = htmlspecialchars($rowStariNazivSlike['slika']);

            $prviNazivSlike = explode('-', $sl); //sifra artikla, odnosno prvi deo naziva slike
            //$ekstenzijaSlike = explode('.', $sl); //ekstenzija slike

            $oldName = '../slike/' . $novaSifra . '/' . $sl;

            $newName = '../slike/' . $novaSifra . '/' . $novaSifra . '-' . $prviNazivSlike[1];

            (rename($oldName, $newName));

            //Promena sifra artikla, odnosno naziva direktorijuma u tabeli Slike
            $queryAzuriranjeNazivaSlike = $pdo->prepare(
                'UPDATE TechnoShop.Slike 
                      SET TechnoShop.Slike.slika = :novaSlika 
                      WHERE TechnoShop.Slike.artikl_sifra = :nsifra;');

            $novaSlika = $novaSifra . '-' . $prviNazivSlike[1];

            $queryAzuriranjeNazivaSlike->bindParam(':novaSlika', $novaSlika);
            $queryAzuriranjeNazivaSlike->bindParam(':nsifra', $novaSifra);

            $queryAzuriranjeNazivaSlike->execute();
            //Promena sifra artikla, odnosno naziva direktorijuma u tabeli Slike
        }

        Database::disconnect();
        //Promena naziva slika u direktorijumu


        header('Location: unosArtikl.php');

    } catch (PDOException $e) {

        echo $e->getMessage();

    }
}
?>

