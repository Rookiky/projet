<?php
require_once "../modele/form_security.php";
require('../modele/config.php');
echo '<script src="../modele/traitement.js"></script>';

if ($_POST["surname"]!=''){
    $surname = test_input($_POST["surname"]);
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $sexe = test_input($_POST["sexe"]);
    $activity = test_input($_POST["activity"]);
    $companycode = test_input($_POST['companycode']);
    $password = test_input($_POST['password']); 
    $confirmpassword = test_input($_POST['confirmpassword']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    } else {
    $surname = test_input($_POST["surname_a"]);
    $name = test_input($_POST["name_a"]);
    $email = test_input($_POST["email"]);
    $sexe = test_input($_POST["sexe_a"]);
    $activity = test_input($_POST["activity_a"]);
    $companycode = test_input($_POST['companycode']);
    $password = test_input($_POST['password_a']); 
    $confirmpassword = test_input($_POST['confirmpassword_a']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    }

    $type_erreur= '';
    
    if($query = $db ->prepare("SELECT * FROM registerlogin WHERE email = ?")) {
    $query -> bind_param('s', $email);
    $query -> execute();
    $query->store_result();

        if ($query->num_rows > 0) {
            $type_erreur = 'erreur_existence';
        } else {
            if  ($password != $confirmpassword) {
                    $type_erreur = 'confirmation_mdp';
                } else {
            $insertQuery = $db->prepare("INSERT INTO registerlogin (surname, sexe, activity, name, companycode,  email, password) VALUES (?, ?, ?, ?, ?, ?, ?);");
            $insertQuery->bind_param("sssssss", $surname, $sexe, $activity, $name, $companycode, $email, $password_hash);
            $result = $insertQuery->execute();
            
            $type_erreur="none";
            
            }
        }}
    $query->close();
    if (isset($insertQuery)){$insertQuery->close();}

echo "<script>erreur_inscription_u('".$type_erreur."')</script>";
?>