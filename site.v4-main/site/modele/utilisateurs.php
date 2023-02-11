<?php
    require_once "config.php";

    //Employés d'une entreprise
    $companycode = $_SESSION['code'];
    $sql = "SELECT * FROM chirongroup.registerlogin where companycode = $companycode";
    $result = $db->query($sql);

    $sql = "SELECT * FROM chirongroup.registerlogin";
    $result2 = $db->query($sql);

   $bdd = "SELECT * FROM chirongroup.compagny_data where companycode = $companycode";
    $resultat = $db->query($bdd);

    if(isset($_DELETE['userId'])){
        $id = $_DELETE['userId'];
        $sql = "DELETE FROM utilisateurs WHERE userId = $id";
        if($conn->query($sql) === TRUE){
            echo "L'utilisateur a été supprimé avec succès";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
?>
