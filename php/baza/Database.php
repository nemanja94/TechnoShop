<?php

class Database
{

    private static $dbName = 'technoshop'; // Naziv baze
    private static $dbHost = 'localhost'; // Dodati hosta
    private static $dbUsername = 'technoShop'; // Dodati username
    private static $dbUserPassword = 'TechnoShop@1211'; // Dodati password

    private static $cont = null;

    public function __construct()
    {

        die('Nije dozvoljeno instanciranje ove klase');

    }

    public static function connect()
    {

        if (null == self::$cont) {

            try {

                self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
                self::$cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {

                $greska = $e->getMessage();
                $fajl = $e->getFile();
                $savet = "Potrebno je promeniti parametre za povezivanje sa bazom podataka. Trenutno nisu postavljeni!";

                require_once('greska_pri_konekciji.html.php');

            }

        }

        return self::$cont;

    }

    public static function disconnect()
    {

        self::$cont = null;

    }
}
