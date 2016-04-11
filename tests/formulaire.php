<p>
  Cette page ne contient que du HTML.
  <br /> Veuillez taper votre prénom :
</p>

<form action="cible.php" method="post">
  <p>
    <input type="text" name="prenom" />
    <textarea name="message" rows="8" cols="45">
      Votre message ici.
    </textarea>
    <select name="choix">
      <option value="choix1">Choix 1</option>
      <option value="choix2">Choix 2</option>
      <option value="choix3" selected="selected">Choix 3</option>
      <option value="choix4">Choix 4</option>
    </select>
    <input type="checkbox" name="case" id="case" />
    <label for="case">Ma case à cocher</label>
    <input type="submit" value="Valider" />
  </p>
</form>

<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
  <p>
    Formulaire d'envoi de fichier :
    <br />
    <input type="file" name="monfichier" />
    <br />
    <input type="submit" value="Envoyer le fichier" />
  </p>
</form>