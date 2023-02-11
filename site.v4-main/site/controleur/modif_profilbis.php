<?php
require_once "../modele/form_security.php";
require('../modele/config.php');
echo '<script src="../modele/traitement.js"></script>';
session_start();

    $surname = test_input($_POST["surname"]);
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $sexe = test_input($_POST["sexe"]);
    $activity = test_input($_POST["activity"]);
    $companycode = test_input($_POST['companycode']);
    $password = test_input($_POST['password']); 
    $confirmpassword = test_input($_POST['confirmpassword']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $surname_a = test_input($_POST["surname"]);
    $name_a = test_input($_POST["name"]);
    $sexe_a = test_input($_POST["sexe"]);
    $activity_a = test_input($_POST["activity"]);
    $password_a = test_input($_POST['password']); 
    $confirmpassword_a = test_input($_POST['confirmpassword']);
    $password_hash_a = password_hash($password, PASSWORD_DEFAULT);

    $id=$_SESSION['Id'];


    if (!empty($surname)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET surname=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $surname, $id);
        $result = $insertQuery->execute();
    }

    if (!empty($surname_a)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET surname=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $surname_a, $id);
        $result = $insertQuery->execute();
    }

    if (!empty($name)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET name=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $name, $id);
        $result = $insertQuery->execute();
    }

    if (!empty($name_a)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET name=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $name_a, $id);
        $result = $insertQuery->execute();
    }

    if (!empty($email)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET email=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $email, $id);
        $result = $insertQuery->execute();
    }

    if (!empty($sexe)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET sexe=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $sexe, $id);
        $result = $insertQuery->execute();
    }

    if (!empty($sexe_a)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET sexe=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $sexe_a, $id);
        $result = $insertQuery->execute();
    }

    if (!empty($activity)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET activity=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $activity, $id);
        $result = $insertQuery->execute();
    }

    if (!empty($activity_a)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET activity=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $activity_a, $id);
        $result = $insertQuery->execute();
    }

    if (!empty($companycode)){
        $insertQuery = $db->prepare("UPDATE registerlogin SET companycode=? WHERE userId=?;");
        $insertQuery->bind_param("ss", $companycode, $id);
        $result = $insertQuery->execute();
    }


    if (!empty($password)){
        if  ($password == $confirmpassword) {
            $insertQuery = $db->prepare("UPDATE registerlogin SET password=? WHERE userId=?;");
            $insertQuery->bind_param("ss", $password_hash,$id);
            $result = $insertQuery->execute();
        }   
    }
    if (!empty($password_a)){
        if  ($password_a == $confirmpassword_a) {
            $insertQuery = $db->prepare("UPDATE registerlogin SET password=? WHERE userId=?;");
            $insertQuery->bind_param("ss", $password_hash_a,$id);
            $result = $insertQuery->execute();
        }   
    }

            


if (isset($insertQuery)){$insertQuery->close();}
header("Location: ../autres/profil.php")


?>