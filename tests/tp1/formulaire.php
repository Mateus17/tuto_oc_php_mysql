<?php

// Le mot de passe n'a pas été envoyé ou n'est pas bon
if (!isset($_POST['password']) || $_POST['password'] != 'kangourou')
{
  ?>
  <form action="formulaire.php" method="post">
    <p>
      <label for="password">Mot de passe : </label>
      <input type="password" name="password" id="password" />

      <input type="submit" value="Accéder aux mdp" />
    </p>
  </form>
  <?php	
}
else if (isset($_POST['password']) && $_POST['password'] == 'kangourou') {
  ?> <p>Bravo, voici les mdp : blablabla... !</p> <?php
}
else
{
  
}

?>