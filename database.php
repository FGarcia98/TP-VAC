<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=user_film;charset=utf8', 'root', 'root');
    
} catch (exception $erreur) {
    $erreur->getMessage();
}

?> 