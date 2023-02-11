<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"  href="../css/contact.css"/> 
        <?php include ("../controleur/type_co.php");?>
    </head>
  
    <div class="background-main">
        <div class="bodyLeft">
                <p class="title">Contact</p>
        </div>
    </div>

    <francais><form class="contact" action="../controleur/contact.php" method="POST">
        <fieldset>
                <label for="sujet">Sujet</label>
                <input type="text" id="sujet" name="sujet" autocomplete="off"><br>
                <label for="message">Description</label>
                <textarea class="text-area" name="message" rows="5"></textarea><br>
                <label for="email">Adresse mail</label>
                <input type="email" id="email" name="email"><br>
                <input id="envoi" type="submit" value="Envoyer">
        </fieldset>
    </form></francais>
    <anglais><form class="contact" action="../controleur/contact.php" method="POST">
        <fieldset>
                <label for="sujet">Subject</label>
                <input type="text" id="sujet" name="sujet" autocomplete="off"><br>
                <label for="message">Description</label>
                <textarea class="text-area" name="message" rows="5"></textarea><br>
                <label for="email">Email address</label>
                <input type="email" id="email" name="email"><br>
                <input id="envoi" type="submit" value="Send">
        </fieldset>
    </form></anglais>


<?php include ("../structure/footer.php")?> 
</html>
