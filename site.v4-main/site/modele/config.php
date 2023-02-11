<?php
//Configuration de la BDD

define('DBSERVER', 'localhost');
define('DBUSERNAME', 'root');
define('DBPASSWORD', '');
define('DBNAME', 'chirongroup');

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if($db === false) {
    die("Error: connection error. ".mysqli_connect_error());
}
?>