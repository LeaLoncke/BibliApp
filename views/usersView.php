<?php
  include("template/headerConnectedUser.php");
 ?>


<div class="barForm">
  <form action="../controllers/users.php" method="post">
    <select name="category">
        <option value="alphabetical" default>A - Z</option>
    </select>
    <input type="submit" name="sort" value="Trier" class="submit">
  </form>
  <a href="#" class="falseButton">Add an user</a>
</div>

<div class="userCards">
    <!-- Repeat this div -->
    <div class="userCard">
        <a href="../controllers/users.php"><img src="../assets/img/red-cross.png" alt="Click on red cross for delete an user"></a>
        <p>John Doe</p>
        <p>Login: a1b2c3d4</p>
        <p>Livres empruntés: 2</p>
        <div>
            <form action="../controllers/addOrUpdateUser.php" method="post">
                <input type="submit" name="updateUser" value="Mettre à jour" class="submit">
            </form>
            <form action="../controllers/userDetails.php" method="post">
                <input type="submit" name="detailsUser" value="Détails" class="submit">
            </form>
        </div>
    </div>

    
</div>


 <?php
   include("template/footer.php");
  ?>