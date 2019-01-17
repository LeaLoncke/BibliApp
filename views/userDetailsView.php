<?php
  include("template/headerConnectedUser.php");
 ?>

<div class="userDetails">
    <p class="userNames">John Doe</p>
    <p>Login: a1b2c3d4</p>
    <p>Livres empruntés: 2</p>
    <ul>
        <li>Harry Potter et la Coupe de Feu</li>
        <li>Gaïg</li>
    </ul>

    <a href="../controllers/users.php" class="falseButton">Retour</a>
</div>


 <?php
   include("template/footer.php");
  ?>