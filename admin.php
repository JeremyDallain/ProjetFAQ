<?php
            require_once "config/pdo.php";


$bdd = connexionPDO();
$query = "SELECT * from faq_cocktail";
$stmt = $bdd->prepare($query);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
    <?php
    $titre="Administrateur";
    require_once "header.php";
    ?>
    <main>
    <div class="container">
            <h2>Administrateur</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end class1">
                <a href="index.php" title="Page Précédente"><button type="button" class="btn btn-info">Page Précédente</button></a>
                <a href="newQuestion.php" title="Nouvelle Question"><button type="button" class="btn btn-info">Nouvelle Question</button></a>
            </div>

            <div class="row">
                <?php 
                    foreach ($items as $valeur){
                ?>
                <div class='col-lg-8'>
                        
                    <div class="accordion accordion-flush " id="accordionFlushExample">
                        

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading<?php echo $valeur['id']?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $valeur['id']?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                <?php echo $valeur['question']?>
                            </button>
                            </h2>
                            <div id="flush-collapse<?php echo $valeur['id']?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $valeur['id']?>" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><?php echo $valeur['response']?></div>
                            </div>
                        </div>        
                            
                    </div>
                </div>

                <div class='col-lg-4'>
                    <a href="#" title="monter"><button type="button" class="btn btn-info"><i class="fas fa-arrow-circle-up"></i></button></a>
                    <a href="#" title="descendre"><button type="button" class="btn btn-info"><i class="fas fa-arrow-circle-down"></i></button></a>
                    <a href="traitementModif.php" title="Modifier"><button type="button" class="btn btn-success btn-taille">Modifier</button></a>
                    <a href="traitementSup.php" title="Supprimer"><button type="button" class="btn btn-danger btn-taille">Supprimer</button></a>
                </div>
                <?php }?>    
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end class1">
                <a href="#" title="Back to the top"><button type="button" class="btn btn-info"><i class="fas fa-arrow-circle-up"></i></button></a>  
            </div>
        </div>    
    </main>
    <?php
    require_once "footer.php";
    ?>
</html>