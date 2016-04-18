<?php

session_start();

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

$req = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM minichat ORDER BY id DESC LIMIT 0, 10');

?>

  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <title>Minichat</title>
  </head>

  <body>
    
    <form action="minichat_post.php" method="post">
      <p>
        <label for="pseudo">Pseudo : </label>
        <input type="text" name="pseudo" id="pseudo" value="<?php echo $_SESSION['pseudo']; ?>" />
      </p>
      <p>
        <label for="message">Message : </label>
        <input type="text" name="message" id="message" />
      </p>
      <p>
        <input type="submit" value="Submit" />
      </p>
    </form>
  
    <h2>Messages</h2>
    
    <table style="width:25%">
      <tr>
        <th>Date / Heure</th>
        <th>Firstname</th>
        <th>Message</th>
      </tr>
      <?php
      while ($donnees = $req->fetch()) {
      ?>
      <tr>
        <td><?php echo $donnees['date_creation_fr']; ?></td>
        <td style="color: blue"><?php echo htmlspecialchars($donnees['pseudo']); ?></td>
        <td><?php echo htmlspecialchars($donnees['message']); ?></td>
      </tr>
      <?php
      }
      ?>
    </table> 
<?php 
$req->closeCursor();
?>
    
  </body>

  </html>