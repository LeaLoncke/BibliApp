<?php
  include("template/headerConnectedUser.php");
 ?>

<form action="../controllers/addOrUpdateBook.php" method="post" class="addBook">
    <div>
        <input type="text" name="title" placeholder="Titre *" required>
        <input type="text" name="author" placeholder="Auteur *" required>
        <input type="date" name="publicationDate" placeholder="Date de publication *" required>
        <input type="text" name="category" placeholder="Categorie *" required>
    </div>
    <div>
        <label for="resume">Résumé *</label>
        <textarea name="resume" id="resume" cols="20" rows="6" required></textarea>
        <input type="file" name="image" class="inputImage"> 
    </div>
    <div class="bottom">
        <p>* à remplir obligatoirement</p>
        <span>
            <a href="../controllers/index.php" class="falseButton">Retour</a>
            <input type="submit" name="addBook" value="Ajouter ce livre" class="submit">
        </span>
    </div>
</form>




<?php
   include("template/footer.php");
  ?>