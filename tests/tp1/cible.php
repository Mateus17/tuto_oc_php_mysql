<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_POST['password']) && $_POST['password'] == 'kangourou')
{
  ?> <p>Bravo, voici les mdp : blablabla... !</p> <?php
} else {
  ?> <p>Bien tentés ! <a href="formulaire.php">Essai encore</a></p> <?php
}