<?php
  include("template/headerConnectedUser.php");
 ?>

<div class="barForm">
  <form action="../controllers/index.php" method="post">
    <select name="category">
      <option value="all" default>Toutes catégories</option>
      <option value="fantaisy">Fantastique</option>
      <option value="romance">Romance</option>
      <option value="thriller">Thriller</option>
    </select>
    <input type="submit" name="sort" value="Trier" class="submit">
  </form>
  <a href="../controllers/addOrUpdateBook.php" class="falseButton">Add a book</a>
</div>

<div class="bookCards">
  <!-- Repeat this div -->
  <div class="bookCard">
    <a href="../controllers/index.php" class="deleteCross"><img src="../assets/img/red-cross.png" alt="Click on red cross for delete a book"></a>
    <img src="../assets/img/default-book.jpg" alt="Default picture of book">
    <a href="../controllers/bookDetails.php">Harry Potter et la Coupe de Feu</a>
  </div>
  
</div>


 <?php
   include("template/footer.php");
  ?>
