<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/gerer_utilisateurs.css"/>
        <link rel="stylesheet" href="../css/admin.css"> 
    </head>

    <?php 
        include ("../controleur/type_co.php");
        require "../modele/config.php";
        require_once "../modele/form_security.php";
    ?>

    <body>
        <francais><h1 class="titre_c">Partie gestion et administrateurs</h1></francais>
        <anglais><h1 class="titre_c">Management and administrators part</h1></anglais>
        <br>
        <francais><a  class="b1" href="../autres/ajouter_admin.php">Ajouter un utilisateur</a></francais>
        <anglais><a  class="b1" href="../autres/ajouter_admin.php">Add a user</a></anglais>
        <francais><h2 class="titre2">Utilisateurs  inscrits:</h2></francais> 
        <anglais><h2 class="titre2">Registered users:</h2></anglais><br>
        <div id='recherche'>
            <francais><p>Si vous souhaitez filtrer la liste des utilisateurs:</p></francais>
            <anglais><p>If you want to filter the list of users:</p></anglais>

            <form action="../controleur/rechercher.php" method="POST" name="search">
                <francais><input class="search" name='empname' placeholder='mot-clé'></input>
                <input class="send" name='search' type='submit' value="Rechercher"></input></francais>
                <anglais><input class="search" name='empname_a' placeholder='keyword'></input>
                <input class="send" name='search_a' type='submit' value="Search"></input></anglais>
            </form>
        </div><br><br>
<?php



if (isset($_POST['search']) || isset($_POST['search_a'])){

if (isset($_POST['search'])) {
$empname = test_input($_POST['empname']);
} else {
    $empname = test_input($_POST['empname_a']);
}
$empname="%".$empname."%";

//Version plus complète:
$sql=$db->prepare("SELECT email, userId, companycode FROM chirongroup.registerlogin WHERE LOWER(name) LIKE LOWER(?) 
OR LOWER(email) LIKE LOWER(?) 
OR LOWER(surname) LIKE LOWER(?) 
OR LOWER(companycode) LIKE LOWER(?)
OR LOWER(activity) LIKE LOWER(?)
OR LOWER(userId) LIKE LOWER(?)");
$sql->bind_param("ssssss", $empname, $empname, $empname, $empname,$empname,$empname);



$sql -> execute();
$result = mysqli_stmt_get_result($sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (count($data) > 0) {
        echo "<table><tr><th class='c1'>Mail</th><th class='c2'>Id</th><th class='c3'></th><th class='c4'></th><th class='c5'></th></tr>";
        foreach ($data as $row) {
            if ($row['companycode']==1029) {
                $banni="<td class='b2bis'><p class='b2' id='banni'><francais>Banni du site</francais><anglais>Banned from the site</anglais></p></td>";
            } else {
                $banni="<td class='b2bis'><a class='b2' href='../controleur/ban.php?id=".$row['userId']."'>
                <francais>Bannir</francais><anglais>Banish</anglais></a></td>";
            }
            echo "<tr>".
            "<td>".$row['email']."</td>".
            "<td >". $row['userId']."</td>".
            "<td class='b2bis'><a class='b2' href='../controleur/delete.php?id=".$row['userId']."'>
            <francais>Supprimer</francais><anglais>Delete</anglais></a></td>".
            $banni.
            "<td class='b2bis'><a class='b2' href='../controleur/setadmin.php?id=".$row['userId']."'>
            <francais>Rendre administrateur</francais><anglais>Set administrator</anglais></a></td>".
            "</tr>";
           
        }
        echo "</table>";
    } else {
        echo "<francais>Aucun résultat n'a été trouvé</francais><anglais>No result found</anglais>";
    }   
}
    


?>
<div style="height:225px"></div>
</body>
<?php 
    include ("../structure/footer.php")
?>
