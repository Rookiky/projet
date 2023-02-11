
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

        <francais><p id="inscription-entreprise">Modifier le profil</p></francais>
        <anglais><p id="inscription-entreprise">Edit your profile</p></anglais>

        <form action="../controleur/modif_profilbis.php" method="POST" name="inscription"> 
            <div class="inscription-form">
                <div class="inscription-box-element">
                    <francais><label>Prénom</label><br>
                    <input class="inscription-input"  name='name' type='text'  placeholder=" prénom"/></francais>
                    <anglais><label>Name</label><br>
                    <input class="inscription-input"  name='name_a' type='text'  placeholder=" name"/></francais></anglais>
                </div>
                <div class="inscription-box-element">
                    <francais><label>Nom</label><br>
                    <input class="inscription-input" name="surname" type="text"  placeholder=" nom"/></francais>
                    <anglais><label>Surname</label><br>
                    <input class="inscription-input" name="surname_a" type="text"  placeholder=" last name"/></anglais>
                </div>
                <francais>
                <div class="inscription-box-element"> 
                    <label><francais>Sexe</francais><anglais>Gender</anglais></label>
                    <select class="inscription-input" name='sexe' list='sexe' autocomplete="off"  >
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                        <option value="A">Autre</option>
                    </select>
                </div>
                </francais>
                <anglais>
                <div class="inscription-box-element"> 
                    <label><francais>Sexe</francais><anglais>Gender</anglais></label>
                    <select class="inscription-input" name='sexe_a' list='sexe' autocomplete="off"  >
                        <option value="H">Man</option>
                        <option value="F">Woman</option>
                        <option value="A">Other</option>
                    </select>
                </div>
                </anglais>

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
                    <input class ="inscription-input" name='activity_a' list="business line" autocomplete="off" />
                        <datalist id="business line">
                            <option value="Agriculture/food">
                            <option value="Banking/Insurance">
                            <option value="Wood/Paper/Cardboard/Printing">
                            <option value="Construction/Building materials">
                            <option value="Chemistry/Parachemistry">
                            <option value="Commerce/Trade/Distribution">
                            <option value="Publishing/Communication/Multimedia">
                            <option value="Electronics/Electricity">
                            <option value="Studies and advice">
                            <option value="Pharmaceutical industry">
                            <option value="Computer/Telecoms">
                            <option value="Machines and equipment/Automobile">
                            <option value="Metallurgy/Metalworking">
                            <option value="Plastic/Rubber">
                            <option value="Services to companies">
                            <option value="Textile/Clothing/Shoes">
                            <option value="Transport/Logistics">
                        </datalist></anglais>
                </div>   
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
                    class="inscription-input" name='password_a' placeholder=' password' type='password' /></anglais>
                </div>
                <div class="inscription-box-element">
                    <francais><label>Confirmation du mot de passe</label><br>
                    <input class="inscription-input" name='confirmpassword' placeholder=' confirmation du mot de passe' type="password" /></francais>
                    <anglais><label>Confirm password</label><br>
                    <input class="inscription-input" name='confirmpassword_a' placeholder=' confirm password' type="password" /></anglais>
                </div>

                <input class='inscription-user2' name='submit' type="submit" value="Confirmation" required/>

            </div>
        </form>
        
       </div> <br>
    </body>
    <?php 
        include ("../structure/footer.php")
    ?>