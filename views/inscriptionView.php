<?php
  include("template/headerAnonymousUser.php");
 ?>

<form action="../controllers/index.php" method="post" class="centerForm">
    <input type="text" name="firstname" placeholder="Prénom" required> <br/>
    <input type="email" name="email" placeholder="E-mail" required> <br/>
    <input type="password" name="password" placeholder="Mot de passe" required> <br/>
    <input type="submit" name="inscription" value="S'inscrire" class="submit"> <br/>
    <p class="linkForm">Déjà enregistré ?</p>
    <a href="../controllers/connexion.php">Connectez-vous ici</a>
</form>

 <?php
   include("template/footer.php");
  ?>