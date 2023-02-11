<!-- calcul de la moyenne des données de la semaine -->
<?php
    require_once "../modele/db_connect.php";
    require_once "../modele/form_security.php";
$conn = OpenCon();
// $id = $_SESSION["id"]; pour intégrer la session
// recup les données user et fait logique temps
$id = 420;
$date = [[getdate(time() - 518400)["yday"], getdate(time() - 518400)["year"]], [getdate(time() - 432000)["yday"], getdate(time() - 432000)["year"]], [getdate(time() - 345600)["yday"], getdate(time() - 345600)["year"]], [getdate(time() - 259200)["yday"], getdate(time() - 259200)["year"]], [getdate(time() - 172800)["yday"], getdate(time() - 172800)["year"]], [getdate(time() - 86400)["yday"], getdate(time() - 86400)["year"]], [getdate(time())["yday"], getdate(time())["year"]]]; 
$stmt = mysqli_prepare($conn, "SELECT * FROM `data` WHERE user_id = $id;");
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_stmt_close($stmt);
$weekdays = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
$dayoffset = array_search(date('l'), $weekdays);
$weekdays_time = [0, 86400, 172800, 259200, 345600, 432000, 518400];
$array = [];
// décalage du jour de la semaine
for($i = 1; $i < 8; $i++){
    array_push($array, $weekdays[($dayoffset + $i) % 7]);
}
// création de l'array
$average = ["Monday" => ["date" =>[],"co2" =>[], "decibels" =>[], "mo" =>[]],
            "Tuesday" => ["date" =>[], "co2" =>[], "decibels" =>[], "mo" =>[]],
            "Wednesday" => ["date" =>[], "co2" =>[], "decibels" =>[], "mo" =>[]],
            "Thursday" => ["date" =>[], "co2" =>[], "decibels" =>[], "mo" =>[]],
            "Friday" => ["date" =>[], "co2" =>[], "decibels" =>[], "mo" =>[]],
            "Saturday" => ["date" =>[], "co2" =>[], "decibels" =>[], "mo" =>[]],
            "Sunday" => ["date" =>[], "co2" =>[], "decibels" =>[], "mo" =>[]]];
// ajoute les données dans leur array respectif
foreach($rows as $row){
    $timetolastweek = 604800 - (86400 - (time() % 86400));
    if($row["time"] >= ($timetolastweek)){
        $jour = date("l", $row["time"]);
        array_push($average[$jour]["date"], $row["time"]);
        array_push($average[$jour]["co2"], $row["co2"]);
        array_push($average[$jour]["decibels"], $row["decibel"]);
        array_push($average[$jour]["mo"], $row["mo"]);
    }
} 
// fait une moyenne de chaque donnée et la push dans la BDD
for($i = 0; $i < 7; $i++){
    $date_for = $date[$i];
    $day = $array[$i];
    $jour = $average[$array[$i]];
    $co2 = array_sum($jour["co2"]) / count($jour["co2"]);
    $decibels = array_sum($jour["decibels"]) / count($jour["decibels"]);
    $mo = array_sum($jour["mo"]) / count($jour["mo"]);
    $stmt = mysqli_prepare($conn, "INSERT INTO `daydata` (`user_id`, `day_year`, `year`, `co2`, `mo`, `decibel`) VALUES ($id, ".$date_for[0].", ".$date_for[1].", $co2, $mo, $decibels);");
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
CloseCon($conn);