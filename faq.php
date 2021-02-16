<?php
// Connexion à la BDD (à personnaliser)
require_once('config/pdo.php');
// Si base de données en UTF-8, utiliser la fonction utf8_decode pour tous les champs de texte à afficher
$bdd= connexionPDO();
// extraction des données à afficher dans le sous-titre 
$requete = "SELECT question, response FROM faq_cocktail ";
$result = $bdd->query($requete);
// tableau des résultats de la ligne > $data_article['nom_champ']
$data_article = $result->fetch();


// Appel de la librairie FPDF
require("fpdf/fpdf.php");

// Création de la class PDF
class PDF extends FPDF {
	
	// Footer
	function Footer() {
		// Positionnement à 1,5 cm du bas
		$this->SetY(-15);
		// Police Arial italique 8
		$this->SetFont('Helvetica','I',9);
		// Numéro de page, centré (C)
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}


// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new PDF('L','mm','A4');

// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',9);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();


// Sous-titre calées à gauche, texte gras (Bold), police de caractère 11
// $pdf->SetFont('Helvetica','B',11);
// couleur de fond de la cellule : gris clair
// $pdf->setFillColor(230,230,230);
// Cellule avec les données du sous-titre sur 2 lignes, pas de bordure mais couleur de fond grise
// $pdf->Cell(75,6,strtoupper(utf8_decode($data_article['question'].' '.$data_article['response'])),0,1,'L',1);				
// $pdf->Ln(10); // saut de ligne 10mm	



// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
// function entete_table($position_entete) {
// 	global $pdf;
// 	$pdf->SetDrawColor(183); // Couleur du fond RVB
// 	$pdf->SetFillColor(221); // Couleur des filets RVB
// 	$pdf->SetTextColor(0); // Couleur du texte noir
// 	$pdf->SetY($position_entete);
// 	// position de colonne 1 (10mm à gauche)	
// 	$pdf->SetY(0);
// 	$pdf->Cell(60,8,'date',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
// 	// position de la colonne 2 (70 = 10+60)
// 	$pdf->SetY(70); 
// 	$pdf->Cell(60,8,'titre',1,0,'C',1);
// 	// position de la colonne 3 (130 = 70+60)
// 	$pdf->SetY(130); 
// 	$pdf->Cell(30,8,'description',1,0,'C',1);

// 	$pdf->Ln(); // Retour à la ligne
// }
// // AFFICHAGE EN-TÊTE DU TABLEAU
// // Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
// $position_entete = 70;
// // police des caractères
// $pdf->SetFont('Helvetica','',9);
// $pdf->SetTextColor(0);
// // on affiche les en-têtes du tableau
// entete_table($position_entete);

$InterLigne = 30;
$position_detail = 18; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
$requete2 = "SELECT * FROM faq_cocktail ";
$result2 = $bdd->query($requete2);
while ($data_visit=$result2->fetch()) {
	// position abcisse de la colonne 1 (10mm du bord)
	$pdf->ln(60);
	$pdf->SetY($position_detail);
	$pdf->SetX(20);
	$pdf->MultiCell(0,$InterLigne,utf8_decode($data_visit['question']).($data_visit['response']),0,'J',0,15);
    // position abcisse de la colonne 2 (70 = 10 + 60)	
	// $pdf->ln(30);
	// $pdf->SetY($position_detail);
	// $pdf->SetX(120); 
	// $pdf->MultiCell(0,$InterLigne,utf8_decode($data_visit['response']),0,'J',0,15);
	

	// on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)	
	$position_detail += 18; 
}



// Nouvelle page PDF
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',11);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();


$pdf->Output('monfichier.pdf','I'); // affichage à l'écran
// Ou export sur le serveur
// $pdf->Output('F', '../test.pdf');
?>
