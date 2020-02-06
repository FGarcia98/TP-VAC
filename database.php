<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=user_film2;charset=utf8', 'root', 'root');
    
} catch (exception $erreur) {
    $erreur->getMessage();
}

?> 