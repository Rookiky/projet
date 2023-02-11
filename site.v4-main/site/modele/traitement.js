//C'est la page qui contiendra tous les codes js principaux:

// Pour la déconnexion
function confirmation() {
    alert("Vous allez être déconnecté.")
}

//Messages d'erreur et redirection envoi de mails, inscription et connexion
function alerteLangue(francais,anglais){
    if (sessionStorage.getItem('langue') == "francais"){
        alert(francais);
    }
    else {
        alert(anglais);
    }
}

function erreur(type_erreur,adresse,code='') {
    if (type_erreur=="none") {
        alert('Envoyé!');
        window.location.href = "../autres/pageAccueil.php";
    } else {
        if (type_erreur=="erreur_envoi"){
            alert("Erreur d'envoi");
        } else if (type_erreur="erreur_mail") {
            alert("Email non valide")
        }
        window.location.href = "../autres/formulaire.php";
    }
}
function erreur_inscription_u(type_erreur){
    if (type_erreur=="none") {
        alert("Inscription réussie");
        window.location.href = "../autres/loginUser.php";
    } else {
        if (type_erreur=="erreur_existence") {
            alert("Email déjà existant");
        } else if (type_erreur=="confirmation_mdp") {
            alert("Les mots de passe ne sont pas identiques");
        }
        window.location.href = "../autres/inscriptionUser.php";
    }
}

function erreur_admin(type_erreur){
    if (type_erreur=="none") {
        alert("Cet utilisateur a bien été inscrit");
        window.location.href = "../autres/admin.php";
    } else {
        if (type_erreur=="erreur_existence") {
            alert("Email déjà existant");
        } else if (type_erreur=="confirmation_mdp") {
            alert("Les mots de passe ne sont pas identiques");
        }
        window.location.href = "../autres/ajouter_admin.php";
    }
}

function erreur_inscription_e(type_erreur,code){
    if (type_erreur=="none") {
        alert("Inscription réussie, votre code d'entreprise est "+code);
        window.location.href = "../autres/loginEntreprise.php";
    } else {
        if (type_erreur=='erreur_existence_co'){
            alert("Entreprise déjà existante");
        } else if (type_erreur=="erreur_existence") {
            alert("Email déjà existant");
        } else if (type_erreur=="confirmation_mdp") {
            alert("Les mots de passe ne sont pas identiques");
        }
        window.location.href = "../autres/inscriptionEntreprise.php";
    }
}

function admin(){
    window.location.href = "../autres/admin.php";
}

function erreur_login_e(type_erreur) {
    if (type_erreur=="connexion") {
        alert("Connexion réussie");
        window.location.href = "pageAccueil.php";
    } else {
        if (type_erreur=="erreur_mdp") {
            alert("Mot de passe ou code incorrect");
        } else if (type_erreur=="erreur_email") {
            alert("Email non enregistré");
        }
        window.location.href = "../autres/loginEntreprise.php";
    }
}

function erreur_login_u(type_erreur) {
    if (type_erreur=="connexion") {
        alert("Connexion réussie");
        window.location.href = "../autres/pageAccueil.php";
    } else if (type_erreur=="admin") {
        alert("Vous êtes connecté en tant qu'administrateur");
        window.location.href = "../autres/admin.php";
    } else {
        if (type_erreur=="erreur_mdp") {
            alert("Mot de passe incorrect");
        } else if (type_erreur=="erreur_email") {
            alert("Email non enregistré");
        } else if (type_erreur=='banni') {
            alert("Cet email est banni du site");
        }
        window.location.href = "../autres/loginUser.php";
    }
}




//Affichage des réponses aux questions de la faq:
var tableau = new Array();
tableau[1] = new Boolean(false); 
tableau[2] = new Boolean(false); 
tableau[3] = new Boolean(false); 
tableau[4] = new Boolean(false); 


function affichage(num) { 
    id='R'+num;
    if (tableau[num]){
        document.getElementById(id).style.display='block';
        tableau[num] = false;
    } else {
        document.getElementById(id).style.display='none';
        tableau[num] = true;
    }
}