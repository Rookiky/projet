<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/inscriptionUser.css"/>
    </head>
    <?php 
    include ("../controleur/type_co.php")
    ?>
    <body class="body-inscription">
       <div class="inscription-box" style="overflow-y:hidden; height: 470px; margin-top: 4%; margin-bottom:5%;">
        <p id="inscription-entreprise"><francais>Connexion Entreprise</francais><anglais>Company Connection</anglais></p>
        <form action="../autres/loginEntreprisebis.php" method="post"> 
            <div class="inscription-form">
                <div class="inscription-box-element">
                    <label><francais>Adresse Mail du responsable</francais><anglais>Supervisor's email address</anglais></label>
                    <input class="inscription-input"  name='email' type='mail'/>
                </div>
                <div class="inscription-box-element">
                    <label><francais>Code de l'entreprise</francais><anglais>Company Code</anglais></label>
                    <input class="inscription-input" name="companycode" type="text" />
                </div>
                <div class="inscription-box-element">
                    <label><francais>Mot de Passe du responsable</francais><anglais>Supervisor's password</anglais></label>
                    <input class="inscription-input" name="password" type="password" />
                </div>
                <input class='inscription-user2' name='submit' type="submit" value="Confirmer"/>
                
                <a href="inscriptionEntreprise.php" class="lien_connexion" style="color:black"><francais>Votre entreprise n'est pas inscrite</francais><anglais>Your company is not registered</anglais></a>
            </div>
        </form>
        
       </div>
    </body>
    <?php 
        include("../structure/footer.php")
    ?>