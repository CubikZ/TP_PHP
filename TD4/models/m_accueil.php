<?php
	include_once 'sql.php';
	//Si l'utilisateur à choisi une catégorie de photo
	if($selection == 0)
	{
		//Toutes les photos
		$requete = "SELECT * FROM  photo";
		$resultat = execRequete($bdd,$requete);
	}
	else
	{
		//Par catégorie
		$requete = "SELECT * FROM photo WHERE catId = ?";
		$parametre = array($selection);
		$resultat = execRequete($bdd,$requete,$parametre);
	}
?>


