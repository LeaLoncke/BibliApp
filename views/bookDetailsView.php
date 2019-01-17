<?php
  include("template/headerConnectedUser.php");
 ?>


<div class="bookInformations">
    <div class="bookImageContainer">
        <img src="../assets/img/default-book.jpg" alt="Default picture of a book" class="bookImage">
    </div>
    <div class="bookDescription">
        <h2>Harry Potter et la Coupe de Feu - J.K. Rowling</h2>
        <h3>Fantastique - 29/10/2000</h3>
        <p>Juste avant d'assister à la coupe du Monde de Quidditch opposant les équipes d'Irlande et de Bulgarie, Harry Potter fait un rêve étrange dans lequel il est témoin du meurtre d'un vieux jardinier moldu par Voldemort, alors que le jardinier surprenait une conversation au sujet de Harry.
        Au camping de la coupe du Monde, juste après le match, des mangemorts font irruption en pleine nuit et provoquent la panique parmi les supporters, en faisant apparaître la Marque des Ténèbres dans le ciel, et annonçant le retour du mage noir.
        Harry passe le reste des vacances d'été au Terrier sous haute surveillance, et entame une nouvelle année à Poudlard, annoncée comme une véritable année de compétition. En effet, l'école accueille exceptionnellement un grand évènement : le Tournoi des Trois Sorciers. 
        À cette occasion, Poudlard accueille également des délégations de deux autres écoles de magie : celles de Durmstrang et de Beauxbâtons. Contre toute attente, alors que les trois champions sont choisis par la Coupe de Feu (Viktor Krum pour Durmstrang, Fleur Delacour pour Beauxbâtons et Cedric Diggory pour Poudlard), un deuxième champion de Poudlard est désigné, et il s'agit de Harry Potter. </p>
    </div>
</div>


<div class="updateOrLoanOrReturn">
    <div class="updateOrReturn">
        <form action="../controllers/addOrUpdateBook.php" method="post" class="updateBook">
            <input type="submit" name="updateBook" value="Mettre à jour" class="submit">
        </form>
        
        <a href="../controllers/index.php" class="falseButton buttonTabletDesktop backToBooksList">Retour</a>
    </div>
    
    
    <!-- IF IS NOT BORROWED -->
    <form action="../controllers/bookDetails.php" method="post" class="availableBook">
        <p>Disponible</p>
        <select name="userNames">
            <option value="default" default>Sélectionnez un utilisateur</option>
            <option value="John Doe">John Doe</option>
        </select> <br/>
        <input type="submit" name="loan" value="Emprunter" class="submit">
    </form>
    
    <!-- ELSE -->
    <form action="../controllers/bookDetails.php" method="post" class="borrowedBook">
        <p>Emprunté <br/> par John Doe</p>
        <input type="submit" name="return" value="Rendre" class="submit">
    </form>
    
    
    <a href="../controllers/index.php" class="falseButton buttonMobile backToBooksList">Retour</a>
</div>


 <?php
   include("template/footer.php");
  ?>