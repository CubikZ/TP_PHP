<?php

	include_once 'sql.php';
  
	//Affichage de la photo choisi
	if(isset($idPhoto))
	{
		$requete = "SELECT * FROM  photo NATURAL JOIN categorie WHERE photoId = ?";
		$parametre = array($idPhoto);
		$resultat = execRequete($bdd,$requete,$parametre);
	}
?>