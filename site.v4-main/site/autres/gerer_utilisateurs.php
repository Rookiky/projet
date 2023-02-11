<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="../css/gerer_utilisateurs.css"/>
    </head>
    <?php 
        include ("../controleur/type_co.php");
        include ("../modele/utilisateurs.php");
    ?>

    <body>
      <h1 class="titre_c"><français>Gérer vos utilisateurs</français><anglais>Manage your users</anglais></h1>
        <p1 style="margin-top : 5%; margin-left: 3%"><français>Votre entreprise:</français><anglais>Your company:</anglais></p1>
      <h2 style="margin-top : 5%; margin-left: 3%"><français>Employés inscrits chez vous:</français><anglais>Your employees</anglais></h2> <br>
    <?php


if ($result->num_rows > 0) {
    echo "<table><tr><th><français>Prénom</français><anglais>Name</anglais></th><th><français>Nom</français><anglais>Surname</anglais></th><th><français>Sexe</français><anglais>Gender</anglais></th><th><français>Service</français><anglais>activity</anglais></th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["surname"]. "</td><td>" . $row["sexe"]. "</td><td>" . $row["activity"]. "</td></tr>";
    }
    echo "</table>";
    } else {
    echo "Aucun résultat n'a été trouvé";
    } 
    ?>
    </body>
<?php 
    include ("../structure/footer.php")
?>
</html>
