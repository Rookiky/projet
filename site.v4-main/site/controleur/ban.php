<?php

include ("../controleur/type_co.php");

include ("../modele/config.php");

$id = $_GET['id'];

$query = "UPDATE registerlogin SET companycode=1029 WHERE userId = $id";

mysqli_query($db, $query) or die (mysqli_error($db));

header('Location: ../autres/admin.php');
?>
