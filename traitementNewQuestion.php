<?php

require "vendor/autoload.php";
require_once 'config/pdo.php';

$Parsedown = new Parsedown();



if(isset($_POST['question']) && !empty($_POST['response'])){
    $question = $_POST['question'];
    $response = $Parsedown->text($_POST['response']);

    $bdd=connexionPDO();
    $reponse = $bdd->prepare("INSERT INTO faq_cocktail (question, response, position) VALUES(:question, :response, 0)");
    $reponse->bindValue(':question', $question, PDO::PARAM_STR);
    $reponse->bindValue(':response', $response, PDO::PARAM_STR);
    $reponse->execute();

    header('Location: index.php');
    exit();
}
