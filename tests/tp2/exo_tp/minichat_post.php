<?php

// Creeation d'un cookie avec le pseudo
setcookie('pseudonyme', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

// On verifie que les 2 champs envoyés ne sont pas vides (j'ai essauyé avec isset mais cela ne marche pas!
if (!empty($_POST['pseudo']) AND !empty($_POST['message']))
{


	// Connexion à la base de données
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
       die('Erreur : '.$e->getMessage());
	}

	// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO mini_chat (pseudo, message, date_envoi) VALUES(?, ?, now())');
	$req->execute(array(htmlspecialchars($_POST['pseudo']),htmlspecialchars( $_POST['message'])));
}

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');

?>