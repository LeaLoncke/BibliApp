<?php
  include("template/headerConnectedUser.php");
 ?>


<form action="../controllers/addOrUpdateUser.php" method="post" class="addUser"> 
    <input type="text" name="firstanme" placeholder="Firstname *" required>
    <input type="text" name="lastname" placeholder="Lastname *" required>
    <input type="hidden" name="login" value="">
    <input type="submit" name="addUser" value="Ajouter un utilisateur" class="submit">
    <a href="../controllers/users.php" class="falseButton">Retour</a>
    <p>* à compléter obligatoirement</p>
</form>


<?php
   include("template/footer.php");
  ?>