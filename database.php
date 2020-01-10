<?php

class Database
{

    //Méthode self:: pour accéder à la fonction connect() depuis la classe.
    private static $dbHost = "localhost";
    private static $dbName = "user_film";
    private static $dbUser = "root";
    private static $dbUserPassword = "";
    private static $pdo = null;

    public static function connect()
    {
        try
        {
            self::$pdo = new PDO("mysql:host=". self::$dbHost . ";dbname=". self::$dbName,self::$dbUser,self::$dbUserPassword);
        }
        catch(PDOException $erreur)
        {
            die($erreur->getMessage());

        }
        return self::$pdo;
    }

   

}


   
?> 