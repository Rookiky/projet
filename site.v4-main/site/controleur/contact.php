
<?php
    require "../modele/form_security.php";
    echo '<script src="../modele/traitement.js"></script>';
    

    if(!empty($_POST['sujet']) && !empty($_POST['message']) && !empty($_POST['email'])){
        $subject = test_input($_POST['sujet']);
        $message = test_input($_POST['message']); 
        $email = test_input($_POST['email']);  

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//Vérification du format mail
            $to = "healthpoint.chirong@gmail.com";
            $message = wordwrap($message, 70, "\r\n");
            $headers = ["From"=>"client <healthpoint.chirong@gmail.com>",
                "Content-Type"=>"text/plain; charset=utf-8",
                "Reply-to"=>$email]; 
        
        
            if(mail($to, $subject, $message, $headers))
                {$type_erreur="none"  ;}
                else
                    {$type_erreur="erreur_envoi"  ;}
        }else{
            $type_erreur="erreur_email"  ;
        }
    }

echo "<script>erreur('".$type_erreur."')</script>";
?>
