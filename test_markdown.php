<?php


require "vendor/autoload.php";

$Parsedown = new Parsedown();


// $texteVenantDuFormulaire = '_**Parsedown**!_';

// $monTexteAEnvoyerEnBDD = $Parsedown->text($texteVenantDuFormulaire);

// echo $monTexteAEnvoyerEnBDD;

echo $Parsedown->text("texte d'exemple1  
texte d'exemple2"); //em
echo $Parsedown->text("**texte d'exemple**"); //strong
echo $Parsedown->text("texte d'exemple");
echo $Parsedown->text("texte d'exemple");
echo $Parsedown->text("texte d'exemple");

//- *italic*
//- **en gras**
// paragraphe = sauter 2 lignes
// deux espace à la fin = <br>
// 

// https://fr.wikipedia.org/wiki/Markdown


# prints: <p>Hello <em>Parsedown</em>!</p>

// echo $Parsedown->text('Hello `Parsedown`!'); # <code>


// echo $Parsedown->line('Hello **Parsedown**!'); # prints: Hello <strong>Parsedown</strong>!

// https://openclassrooms.com/fr/courses/1304236-redigez-en-markdown