<script src="../modele/traitement.js"></script>
<?php
session_start();
require_once "../modele/config.php";
require_once "../modele/form_security.php";


$type_erreur = '';

$email =(test_input($_POST['email']));
$password=(test_input($_POST['password']));

$requete = $db->prepare("SELECT count(*) FROM registerlogin where email = ? ");
$requete -> bind_param('s', $email);
$requete -> execute();
$requete -> bind_result($count);
$requete -> fetch();
$requete->close();

$query= $db -> prepare("SELECT password FROM registerlogin where email = ?");
$query -> bind_param('s', $email);
$query -> execute();
$query -> bind_result($hash);
$query ->fetch();
$query->close();

$query2=$db -> prepare("SELECT companycode FROM registerlogin where email = ?");
$query2 -> bind_param('s', $email); 
$query2 -> execute();
$query2 -> bind_result($companycode);
$query2 ->fetch();
$query2->close();

$query3=$db -> prepare("SELECT userId FROM registerlogin where email = ?");
$query3 -> bind_param('s', $email); 
$query3 -> execute();
$query3 -> bind_result($id);
$query3 -> fetch();
$query3->close();


    if($count!=0) 
    { if (password_verify($password, $hash)==true) {
            $_SESSION['email'] = $email;
            $_SESSION['code'] = $companycode;
            $_SESSION['type'] = "User";
            $_SESSION['Id']= $id;
            $type_erreur="connexion";
            if ($companycode==1015) {
                $type_erreur="admin";
                $_SESSION['type'] = "Admin";
            } else if($companycode==1029){
                $type_erreur="banni";
                session_destroy();
            }
    } else {
        $type_erreur="erreur_mdp";
        }
        
    }
    else
    {
        $type_erreur="erreur_email"; 
    }

$db->close();

echo "<script>erreur_login_u('".$type_erreur."')</script>";

?>
