<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom, possesseur, prix FROM jeux_video WHERE possesseur=\'Michel\' AND prix < 20 ORDER BY prix DESC');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur'] . ' et est vendu ' . $donnees['prix'] . '€.<br />';
}

$reponse->closeCursor();

?>