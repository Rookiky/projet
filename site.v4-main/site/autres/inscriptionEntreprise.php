
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/inscriptionUser.css"/>
    </head>
    <?php 
        include ("../controleur/type_co.php");
    ?>
    
    <body class="body-inscription">
        <div class="inscription-box" >
        <p id="inscription-entreprise">Inscription</p>

        <form action="../controleur/inscriptionEntreprisebis.php" method="POST" name="inscription"> 
            <div class="inscription-form">

            <!--Inscription de l'entreprise-->
                <div class="inscription-box-element">
                    <francais><label>Nom de l'entreprise</label><br>
                    <input class="inscription-input"  name='companyname' type='text'  placeholder=" nom de l'entreprise"/></francais>
                    <anglais><label>Company name</label><br>
                    <input class="inscription-input"  name='companyname_a' type='text'  placeholder=" company name"/></anglais>
                </div>
            <!--Inscription du responsable l'entreprise-->
            <francais><p class=intitule>Inscription du responsable: </p><br>
                <div class="inscription-box-element">
                    <label>Prénom</label>
                    <input class="inscription-input"  name='name' type='text'  placeholder=" prénom"/>
                </div></francais>
                <anglais><p class=intitule>Registration of the supervisor: </p><br>
                <div class="inscription-box-element">
                    <label>Name</label>
                    <input class="inscription-input"  name='name_a' type='text'  placeholder=" name"/>
                </div></anglais>
                <div class="inscription-box-element">
                    <francais><label>Nom</label><br>
                    <input class="inscription-input" name="surname" type="text"  placeholder=" nom"/></francais>
                    <anglais><label>Surname</label><br>
                    <input class="inscription-input" name="surname_a" type="text"  placeholder=" last name"/></anglais>
                </div>
                <div class="inscription-box-element"> 
                    <francais><label>Sexe</label><br>
                    <select class="inscription-input" name='sexe' list='sexe' autocomplete="off"  >
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                        <option value="A">Autre</option>
                    </select></francais>
                    <anglais><label>Gender</label><br>
                    <select class="inscription-input" name='sexe_a' list='sexe' autocomplete="off" >
                        <option value="H">Man</option>
                        <option value="F">Woman</option>
                        <option value="A">Other</option>
                    </select></anglais>
                </div>
                <div class="inscription-box-element">
                    <francais><label>Secteur d'activité</label><br>
                    <input class="inscription-input" name='activity' list="secteur d'activité" autocomplete="off" />
                        <datalist id="secteur d'activité">
                            <option value="Agroalimentaire">
                            <option value="Banque/Assurance">
                            <option value="Bois/Papier/Carton/imprimerie">
                            <option value="BTP/Matériaux de construction">
                            <option value="Chimie/Parachimie">
                            <option value="Commerce/Négoce/Distribution">
                            <option value="Edition/Communication/Multimédia">
                            <option value="Electronique/Electricité">
                            <option value="Etudes et conseils">
                            <option value="Industrie pharmaceutique">
                            <option value="Informatique/Télécoms">
                            <option value="Machines et équipementd/Automobile">
                            <option value="Métallurgie/Travail du métal">
                            <option value="Plastique/Caoutchouc">
                            <option value="Services aux entreprises">
                            <option value="Textile/Habillement/Chaussure">
                            <option value="Transports/Logistique">
                        </datalist></francais>
                    <anglais><label>Business Line</label><br>
                    <input class="inscription-input" name='activity_a' list="activity sector" autocomplete="off" />
                        <datalist id="activity sector">
                            <option value="Food industry">
                            <option value="Bank/Insurance">
                            <option value="Wood/Paper/Cardboard/Printing">
                            <option value="BTP/Construction materials">
                            <option value="Chemistry/Parachemistry">
                            <option value="Commerce/Trade/Distribution">
                            <option value="Publishing/Communication/Multimedia">
                            <option value="Electronics/Electricity">
                            <option value="Studies and advice">
                            <option value="Pharmaceutical industry">
                            <option value="Computer/Telecoms">
                            <option value="Machines and equipment/Automobile">
                            <option value="Metallurgy/Metal work">
                            <option value="Plastic/Rubber">
                            <option value="Services to companies">
                            <option value="Textile/Clothing/Shoes">
                            <option value="Transport/Logistics">
                        </datalist></anglais>
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
                    class="inscription-input" name='password_a' placeholder=' password' type='password' /></anglais>
                </div>
                <div class="inscription-box-element">
                    <francais><label>Confirmation du mot de passe</label><br>
                    <input class="inscription-input" name='confirmpassword' placeholder=' confirmation du mot de passe' type="password" /></francais>
                    <anglais><label>Confirm password</label><br>
                    <input class="inscription-input" name='confirmpassword_a' placeholder=' confirm password' type="password" /></anglais>
                </div>   
                <input class='inscription-user2' name='submit' type="submit" value="Confirmation"/>
            </div>
        </form>

       </div> <br>
    </body>


</html>

    <?php 
        include ("../structure/footer.php")
    ?>