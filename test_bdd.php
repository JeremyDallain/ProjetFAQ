<?php 

require_once "config/pdo.php";


$bdd = connexionPDO();
$query = "SELECT * from faq_cocktail";
$stmt = $bdd->prepare($query);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);


var_dump($items);