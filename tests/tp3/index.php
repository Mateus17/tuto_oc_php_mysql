<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \' %e/%m/%Y à %Hh%imin%ss  \') AS date_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');
$req->execute();

?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <title>Mon super blog</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Mon super blog !</h1>
  
  <p>Derniers billets du blog :</p>
  <?php while ($donnees = $req->fetch()) { ?>
  <div class="news">
    <h3><?php echo htmlspecialchars($donnees['titre']); ?> le <?php echo htmlspecialchars($donnees['date_fr']); ?></h3>
    <p>
    <?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?><br>
    <a href="commentaires.php?billet=<?php echo htmlspecialchars($donnees['id']); ?>">Commentaires</a>
    </p>
    
  </div>
  <?php } $req->closeCursor(); ?>
</body>

</html>