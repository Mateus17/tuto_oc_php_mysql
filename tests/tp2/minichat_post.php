<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
$req->execute(array(
  'pseudo' => $_POST['pseudo'],
  'message' => $_POST['message']
));

header('Location: minichat.php');