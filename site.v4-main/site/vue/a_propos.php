<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/gerer_utilisateurs.css"/>
    </head>
    <?php 
        include ("../controleur/type_co.php");
    ?>

    <body>  
        <francais><h1 class="titre_c">A propos</h1></francais>
        <anglais><h1 class="titre_c">About us</h1></anglais>
        <francais><h2 style="margin-top : 50px; margin-left: 10%">Qui sommes-nous?</h2></francais>
        <anglais><h2 style="margin-top : 50px; margin-left: 10%">Who are we?</h2></anglais>
            <div class="a_propos">
                <francais><p1> Nous sommes un groupe d'ingénieurs désireux de mettre la technologie au service de notre société 
                        ainsi que de la votre. </p1><br><p1>
                        Notre but est de permettre aux entreprises de gérer efficacement leurs employés tout en permettant à 
                        ces derniers de travailler dans des conditions adaptées.
                </p1></francais>
                <anglais><p1  > We are a group of engineers who want to put technology at the service of our society 
                        as well as yours. </p1><br><p1 >
                        Our goal is to allow companies to manage their employees effectively while allowing them to work in 
                        adapted conditions.</p1></anglais>
            </div>
        <h2 style="margin-top :50px; margin-left: 10%"><francais>Informations générales</francais><anglais>General Informations</anglais></h2>
            <div class="a_propos">
                <francais><p1>Société &copy; Chiron group:</p1></francais>
                <anglais><p1>Company &copy; Chiron group:</p1></anglais>
                <francais><p1>Adresse: 12 rue de Vanves 92130 Issy-Les-Moulineaux</p1></francais>
                <anglais><p1>Address: 12 rue de Vanves 92130 Issy-Les-Moulineaux</p1></anglais>
                <p1>Email: </p1><a href="../autres/formulaire.php" class='mail'>healthpoint.chirong@gmail.com</a><br>
                <p1>Tel: 06 12 34 56 78</p1>
            </div>
            <div style="height: 20px"></div>
    </body>
    <?php 
        include ("../structure/footer.php")
    ?>
</html>