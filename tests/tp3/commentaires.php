<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req_billet_info = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \' %e/%m/%Y à %Hh%imin%ss  \') AS date_fr FROM billets');
$donnees = $req_billet_info->fetch();

$billet = htmlspecialchars($_GET['billet']);

$req_billet_commentaires = $bdd->prepare('SELECT id, id_billet, auteur, commentaire, DATE_FORMAT(date_commentaire, \' %e/%m/%Y à %Hh%imin%ss  \') AS date_commentaire_fr FROM commentaires WHERE id_billet = :billet ORDER BY date_commentaire');
$req_billet_commentaires->execute(array(
  'billet' => $billet
));

?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <title>Un article</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Mon super blog !</h1>
    
  <div class="news">
    <h3><?php echo htmlspecialchars($donnees['titre']); ?> le <?php echo htmlspecialchars($donnees['date_fr']); ?></h3>
    <p>
    <?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?><br>
    <a href="commentaires.php?billet=<?php echo htmlspecialchars($donnees['id']); ?>">Commentaires</a>
    </p>
  </div>
  
  <h2>Commentaires</h2>
    
  <?php while ($commentaire = $req_billet_commentaires->fetch()) { ?>

  <p><b><?php echo htmlspecialchars($commentaire['auteur']); ?></b> le <?php echo $commentaire['date_commentaire_fr']; ?></p>
  <p><?php echo nl2br(htmlspecialchars($commentaire['commentaire'])); ?></p>

  <?php } $req_billet_commentaires->closeCursor(); ?>

  <p></p>

</body>

</html>