<?php

if(!empty($_POST['Nom']) AND !empty($_POST['Prénom']) AND !empty($_POST['Adresse']) AND !empty($_POST['Ville']) AND !empty($_POST['Code']) AND is_numeric($_POST['Code']) AND strlen($_POST['Code'])==5){
	extract($_POST);
	
	echo" Bienvenue $prenom <b> $nom </b> . <br/>";
	echo utf8_encode("nous avons bien noté que vous habitez : $adresse $ville ($code).");
}
?>
