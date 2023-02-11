
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/inscriptionUser.css"/>
    </head>
    <?php 
        include ("../controleur/type_co.php");
    ?>
    
    <body class="body-inscription">
        <div class="inscription-box" ><br>

        <francais><p id="inscription-entreprise">Ajouter un utilisateur</p></francais>
        <anglais><p id="inscription-entreprise">Add a user</p></anglais>

        <form action="../controleur/ajouter_adminbis.php" method="POST" name="inscription"> 
            <div class="inscription-form">
                <div class="inscription-box-element">
                    <label><francais>Code Entreprise</francais><anglais>Company Code</anglais></label>
                    <input class="inscription-input" name='companycode' placeholder=' code' type='text' autocomplete="off" />
                </div>
                <div class="inscription-box-element">
                    <label><francais>Adresse Mail</francais><anglais>Email address</anglais></label>
                    <input class="inscription-input" name='email' placeholder=" email" type="text"
                    pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$"/>
                </div>
                <div class="inscription-box-element"> 
                    <francais><label>Mot de Passe</label><br>
                    <input  pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                    title="Veuillez inscrire un mot de passe contenant au moins une lettre majuscule, une lettre minuscule et un chiffre ou un caractère spécial, et contenant au moins 6 caractères."
                    class="inscription-input" name='password' placeholder=' mot de passe' type='password' /></francais>
                    <anglais><label>Password</label><br>
                    <input  pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                    title="Please enter a password containing at least one uppercase letter, one lowercase letter and a number or special character, and containing at least 6 characters."
                    class="inscription-input" name='password' placeholder=' password' type='password' /></anglais>
                </div>
                <div class="inscription-box-element">
                    <francais><label>Confirmation du mot de passe</label><br>
                    <input class="inscription-input" name='confirmpassword' placeholder=' confirmation du mot de passe' type="password" /></francais>
                    <anglais><label>Confirm password</label><br>
                    <input class="inscription-input" name='confirmpassword' placeholder=' confirm password' type="password" /></anglais>
                </div>

                <input class='inscription-user2' name='submit' type="submit" value="Confirmation" required/>

            </div>
        </form>
        
       </div> <br>
    </body>
    <?php 
        include ("../structure/footer.php")
    ?>