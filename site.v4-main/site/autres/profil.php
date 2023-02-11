<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="../css/gerer_utilisateurs.css"/>
    </head>
    <?php 
        include ("../controleur/type_co.php");
        require "../modele/config.php";
    ?>

    <body>
      <h1 class="titre_c"><francais>Votre profil</francais><anglais>Your profile</anglais></h1><br><br><br>
      <francais><a href="../autres/modif_profil.php" class="lien_modif">Modifier votre profil</a></francais>
      <anglais><a href="../autres/modif_profil.php" class="lien_modif">Edit your profile</a></anglais>
      <br><br>
    <?php
$id=$_SESSION['Id'];
$sql=$db->prepare("SELECT * FROM chirongroup.registerlogin WHERE userId=?");
$sql->bind_param("s", $id);
$sql -> execute();
$result = mysqli_stmt_get_result($sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
$data=$data[0];

$code=$_SESSION['code'];
$sql2=$db->prepare("SELECT companyname FROM chirongroup.companyregisterlogin WHERE companycode=?");
$sql2->bind_param("s", $code);
$sql2 -> execute();
$result2 = mysqli_stmt_get_result($sql2);
$companyname = mysqli_fetch_all($result2, MYSQLI_ASSOC);
$companyname=$companyname[0];
    ?>

    <div class="profil">
        <div class="profil-element">
            <francais><h3>Prénom:</h3></francais>
            <anglais><h3>Name:</h3></anglais>
            &nbsp;&nbsp;
            <?php echo "<p>".$data['name']."</p>"?><br><br>
        </div>
        <div class="profil-element">
            <francais><h3>Nom de famille:</h3></francais>
            <anglais><h3>Last name:</h3></anglais>
            &nbsp;&nbsp;
            <?php echo "<p>".$data['surname']."</p>"?><br><br>
        </div>
        <div class="profil-element">
            <h3>Email:</h3>
            &nbsp;&nbsp;
            <?php echo "<p>".$data['email']."</p>"?><br><br>
        </div>
        <div class="profil-element">
            <francais><h3>Sexe:</h3></francais>
            <anglais><h3>Gender:</h3></anglais>
            &nbsp;&nbsp;
            <?php echo "<p>".$data['sexe']."</p>"?><br><br>
        </div>
        <div class="profil-element">
            <francais><h3>Entreprise:</h3></francais>
            <anglais><h3>Company:</h3></anglais>
            &nbsp;&nbsp;
            <?php echo "<p>".$companyname['companyname']."</p>"?><br><br>
        </div>
        <div class="profil-element">
            <francais><h3>Secteur d'activité:</h3></francais>
            <anglais><h3>Business line:</h3></anglais>
            &nbsp;&nbsp;
            <?php echo "<p>".$data['activity']."</p>"?><br><br>
        </div>
    </div>
    <div class="espace"></div>


    </body>
<?php 
    include ("../structure/footer.php")
?>
</html>