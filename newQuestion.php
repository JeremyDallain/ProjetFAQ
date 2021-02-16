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
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="question" placeholder="Votre Question">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Réponse :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="response" rows="6"></textarea>
                </div>
                <p>Comment ça fonctionne :</p>
                <ul>
                    <li>Pour écrire en italique : * votre mot *</li>
                    <li>Pour écrire en gras : ** votre mot **</li>
                    <li>Pour écrire deux paragraphes : sauter 2 lignes entre chaques éléments</li>
                    <li>Pour écrire un titre au premier niveau (h1) : # votre mot #</li>
                    <li>Pour écrire un titre au deuxieme niveau (h2) : ## votre mot ##</li>
                    <li>Pour écrire un titre au troisieme niveau (h3) : ### votre mot ###</li>
                    <li>Pour écrire un titre au quatrieme niveau (h4) : #### votre mot ####</li>
                    <li>Pour écrire un titre au cinquieme niveau (h5) : ##### votre mot #####</li>
                    <li>Pour écrire un titre au sixieme niveau (h6) : ###### votre mot ######</li>
                    
                </ul>
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