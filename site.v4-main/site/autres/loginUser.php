

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/inscriptionUser.css"/>
    </head>
    <?php 
        include ("../controleur/type_co.php");
    ?>
    <body class="body-inscription">
       <div class="inscription-box" style="overflow-y:hidden; height: 450px; margin-top: 5%; margin-bottom:5%;">
        <p id="inscription-entreprise">Connexion</p>
        <form action="loginUserbis.php" method="post"> 
            <div class="inscription-form">
                <div class="inscription-box-element">
                    <label>Adresse Mail</label>
                    <input class="inscription-input"  name='email' type='mail' required/>
                </div>
                <div class="inscription-box-element">
                    <label>Mot de Passe</label>
                    <input class="inscription-input" name="password" type="password" required/>
                </div>
                <input class='inscription-user2' name='submit' type="submit" value="Confirmer"/>
                
                <a href="inscriptionUser.php" class="lien_connexion" style="color:black"><francais>Vous n'êtes pas inscrit</francais><anglais>You are not registered</anglais></a>
                <a href="loginEntreprise.php" class="lien_connexion" style="color:black"><francais>Vous connecter en tant qu'entreprise</francais><anglais>Log in as a company</anglais></a>
            </div>
        </form>
        
       </div>
    </body>
    <?php 
        include ("../structure/footer.php")
    ?>

