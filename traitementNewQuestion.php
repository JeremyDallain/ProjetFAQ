<?php


require_once 'config/pdo.php';
$bdd=connexionPDO();

if(isset($_POST['question']) && !empty($_POST['response'])){
$question = $_POST['question'];
$response = $_POST['response'];

$req = $bdd->query("INSERT INTO faq_cocktail(question,response,position) VALUES ('$question','$response',0)");
$req->execute();

}

header("location: index.php");

?>