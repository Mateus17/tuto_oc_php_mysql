<?php
include_once('Membre.class.php');

class Admin extends Membre
{
 private $couleur;

  public function setCouleur($choixCouleur)
  {
    $this->couleur = $choixCouleur;
  }
  
  public function getCouleur()
  {
    return $this->couleur;
  }
}
?>