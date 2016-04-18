<?php

include_once('Membre.class.php');
include_once('Admin.class.php');

$membre = new Membre(31); // Contient un pseudo, une adresse e-mail...
$maitreDesLieux = new Admin(2); // Contient les mêmes données qu'un membre + la couleur

$membre->setPseudo('Arckintox'); // OK
$maitreDesLieux->setPseudo('M@teo21'); // OK

//$membre->setCouleur('Rouge'); // Impossible (un membre n'a pas de couleur)
$maitreDesLieux->setCouleur('Rouge'); // OK
