
<script src="../modele/traitement.js"></script>

<?php
session_start();
require_once "../modele/config.php";
require_once "../modele/form_security.php";

$type_erreur = '';

$mailresponsable =test_input($_POST['email']);
$password=test_input($_POST['password']);
$companycode = test_input($_POST['companycode']);

$requete = $db->prepare("SELECT count(*) FROM companyregisterlogin where mailresponsable = ? ");
$requete -> bind_param('s', $mailresponsable);
$requete -> execute();
$requete -> bind_result($count);
$requete -> fetch();
$requete->close();

$query= $db -> prepare("SELECT password FROM registerlogin where email = ?");
$query -> bind_param('s', $mailresponsable);
$query -> execute();
$query -> bind_result($hash);
$query ->fetch();
$query->close();

$query2=$db->prepare("SELECT companycode FROM companyregisterlogin where mailresponsable = ?");
$query2 -> bind_param('s', $mailresponsable); 
$query2 -> execute();
$query2 -> bind_result($code);
$query2 ->fetch();
$query2->close();

$query3=$db -> prepare("SELECT userId FROM registerlogin where email = ?");
$query3 -> bind_param('s', $mailresponsable); 
$query3 -> execute();
$query3 -> bind_result($id);
$query3 -> fetch();
$query3->close();


        if($count!=0) 
        { if (password_verify($password, $hash)==true && $code==$companycode ) { 
            $_SESSION['email'] = $mailresponsable;
            $_SESSION['code'] = $companycode;
            $_SESSION['type'] = "Company";
            $_SESSION['Id']= $id;
            $type_erreur="connexion";
        } else {
            $type_erreur="erreur_mdp";
            }
        
        }
        else
        {
            $type_erreur="erreur_email"; 
        }
$db->close(); 

echo "<script>erreur_login_e('".$type_erreur."')</script>";

?>
