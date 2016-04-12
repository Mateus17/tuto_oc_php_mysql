<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT SUM(prix) AS prix_total, possesseur FROM jeux_video GROUP BY possesseur');
$req->execute();

echo '<ul>';
while ($donnees = $req->fetch())
{
	echo '<li>' . $donnees['prix_total'] . ' - ' . $donnees['possesseur'] . '</li>';
}
echo '</ul>';

$req->closeCursor();

?>