<!-- randomisation des données ajoutées à la base de données -->
<?php
    session_start();
    require_once "../modele/db_connect.php";
    require_once "../modele/form_security.php";
$conn = OpenCon();
for($i = 0; $i < 1000; $i++) {
$time = time() - rand(0, 604000);
$co2 = rand(0, 100);
$mo = rand(0, 100);
$decibel = rand(0, 200); 
$stmt = mysqli_prepare($conn, "INSERT INTO `data` (`id`, `user_id`, `time`, `co2`, `mo`, `decibel`) VALUES (NULL, '420', $time, $co2, $mo, $decibel);");
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
CloseCon($conn);