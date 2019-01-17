<?php
  include("template/headerAnonymousUser.php");
 ?>

<form action="../controllers/index.php" method="post" class="centerForm">
    <input type="text" name="login" placeholder="Identifiant" required> <br/>
    <input type="password" name="password" placeholder="Mot de passe" required> <br/>
    <input type="submit" name="connexion" value="Se connecter" class="submit"> <br/>
    <p class="linkForm">Pas encore inscrit ?</p>
    <a href="../controllers/inscription.php">Inscrivez-vous ici</a>    
</form>



 <?php
   include("template/footer.php");
  ?>