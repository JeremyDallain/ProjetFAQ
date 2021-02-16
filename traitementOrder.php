<?php

require_once 'config/pdo.php';


if(isset($_GET['action']) && !empty($_GET['id'])){
    $bdd=connexionPDO();
    $id = $_GET['id'];

    $query = "SELECT * FROM faq_cocktail WHERE id=$id";    
    $reponse = $bdd->prepare($query);
    $reponse->execute();
    $item = $reponse->fetch(PDO::FETCH_ASSOC);

    $position = $item['position'];

    if ($_GET['action'] === 'down') {
        $position -= 1;
    } else {
        $position += 1;
    }
    
    $query = "UPDATE faq_cocktail SET position = $position WHERE id = :id";
    $reponse = $bdd->prepare($query);
    $reponse->bindValue("id", $id, PDO::PARAM_INT);
    $reponse->execute();

    
    // $reponse = $bdd->prepare("INSERT INTO faq_cocktail (question, response, position) VALUES(:question, :response, 0)");
    // $reponse->bindValue(':question', $question, PDO::PARAM_STR);
    // $reponse->bindValue(':response', $response, PDO::PARAM_STR);
    // $reponse->execute();

    header('Location: admin.php');
    exit();
}
