<?php

class Database
{
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
        catch(PDOException $e)
        {
            die($e->getMessage());

        }
        return self::$pdo;
    }

   

}


   
?> 