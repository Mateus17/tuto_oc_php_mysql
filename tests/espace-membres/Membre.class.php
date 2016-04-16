<?php
class Membre
{
  
  private $pseudo;
  private $email;
  private $signature;
  private $actif;
  
  public function getPseudo()
  {
    return $this->pseudo;
  }

  public function setPseudo($nouveauPseudo)
  {
    $this->pseudo = $nouveauPseudo;
  }
  
  public function bannir()
  {
    $this->actif = false;
    $this->envoyerEMail('Vous avez été banni', 'Ne revenez plus !');
  }
  
  public function envoyerEMail($titre, $message)
  {
    mail($this->email, $titre, $message);
  }
  
}