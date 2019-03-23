<?php
/*
icono.php	v0.4
Copyright	xf75013 2019

Permet d'intégrer facilement dans la page une icone ou une image stockée dans des dossiers prédéfinis.
Ici les deux dossiers sont ./icono/ et ./images/ pour mes besoins particuliers.

Usage :
	{{ icono ico="" type="" taille="" titre="" }}
	{{ icono img="" type="" taille="" titre="" }}
*/

if (!defined("WIKINI_VERSION"))
{
    die ("acc&egrave;s direct interdit");
}

$adrbase = "http://" . $_SERVER['SERVER_NAME'] . "/"; // cas particulier pour le wiki niloo.fr pas de https dans l'adresse
$dossico = "icono/";
$dossimg = "images/";

// récuperation du paramètres
$ico = $this->GetParameter("ico");
$img = $this->GetParameter("img");
$type = $this->GetParameter("type");
$altern = $this->GetParameter("altern");
$taille = $this->GetParameter("taille");
if (empty($type)){
	$type = 'png';
}
if (empty($altern)){
	$altern = $ico;
}
if (empty($taille)){
	$taille = 'auto';
}

// Affichage de la page ou d'un message d'erreur
if (!empty($ico)){
	$output = "<span><img src=\"".$adrbase.$dossico.$ico.".".$type."\" alt=\"".$altern."\" style=\"border:0px; top:-2px; position:relative; width:".$taille."\" height=\"auto\" /></span>";
	echo $output;
} else if (!empty($img)) {
	$output = "<span><img src=\"".$adrbase.$dossimg.$img.".".$type."\" alt=\"".$altern."\" style=\"border:0px; top:-2px; position:relative; width:".$taille."\" height=\"auto\" /></span>";
	echo $output;
}
?>
