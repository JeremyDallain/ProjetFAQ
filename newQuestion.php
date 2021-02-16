<!DOCTYPE html>
<html>
    <?php
    $titre="Nouvelle Question";
    require_once "header.php";
    ?>
    <main>
        <div class="container">
            <h2>Nouvelle Question</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end class1">
                <a href="admin.php" title="Page Précédente"><button type="button" class="btn btn-info">Page Précédente</button></a>
                <a href="index.php" title="Accueil"><button type="button" class="btn btn-info">Accueil</button></a>    
            </div>
            <form action ="traitementNewQuestion.php" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Question :</label>
                    <input type="texr" class="form-control" id="exampleFormControlInput1" placeholder="Votre Question">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Réponse :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <a title="traitement Question "><div class="d-grid gap-2  form-style">
                    <button href="traitementNewQuestion.php" class="btn btn-info" type="submit">Envoyer</button>
                </a>
            </form>
        </div>    
    </main>
    <?php
    require_once "footer.php";
    ?>
</html>