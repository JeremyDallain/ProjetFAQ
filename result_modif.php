<?php
require_once 'config/pdo.php';
$bdd=connexionPDO();

$id=$_GET["id"];
$newquestion=$_GET["question"];
$newresponse=$_GET['reponse'];
$requete="UPDATE faq_cocktail set question='".$newquestion."',response='".$response."'where id='".$id."'";
$update=$bdd->query($requete);
echo"votre modif est prise en compte";
?><br>
<a href="admin.php"title="retour">retour à l'accueil</a>