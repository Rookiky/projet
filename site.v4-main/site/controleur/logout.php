<?php
session_start();
echo "<script>alert('Vous êtes déconnecté')</script>";
session_destroy();


header("Location: ../autres/loginUser.php");


?>