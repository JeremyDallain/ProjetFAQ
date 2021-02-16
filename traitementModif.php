<?php
require_once('../ProjetFAQ/config/pdo.php');
$bdd=connexionPDO();
?>
    <head>
    <meta charset="utf-8"/>
    </head>
    <body>
        <form action="result_modif.php" method="get">
            <p> Question <input type="texte" name="question" value='<?php echo $question;?>'/></p>
            <p> Reponse <input type="texte"name="reponse"value='<?php echo $response;?>'/></p>
            <input type="number" name="id" value='<?php echo $id; ?>'hidden/>
            <input type="submit"/>
        </form>
    </body>
</html>