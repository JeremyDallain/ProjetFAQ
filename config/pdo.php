<?php

require_once 'settings.inc.php';

function connexionPDO(){    
    try {
        $bdd = new PDO("mysql:host=".HOST_NAME.";dbname=".DB_NAME.";charset=utf8;", USER_NAME, PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}