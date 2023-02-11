<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/donnees.css"> 
    </head>
<?php
    include ("../controleur/type_co.php");
    include ("../modele/db_connect.php");
    //require_once ("../autres/averagedatacalc.php");
    $conn = OpenCon();
    $id = 420;
    $stmt = mysqli_prepare($conn, "SELECT * FROM `daydata` WHERE user_id = $id ORDER BY id DESC LIMIT 7;");
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_stmt_close($stmt);
    CloseCon($conn);
?>
<div class="titre_c">Vos données</div><br>
<div class="cadre_master">
<div class="cadre"> Monoxyde de Carbone  
    <svg width="20" height="20">
    <rect y="0" width="20" height="20" style="fill:#38F44B" />
    </svg></div>
<div class="cadre"> Niveau Sonore
    <svg width="20" height="20">
    <rect y="0" width="20" height="20" style="fill:#F97474" />
    </svg></div>
<div class="cadre"> Dioxyde de Carbone
    <svg width="20" height="20">
    <rect y="0" width="20" height="20" style="fill:#676767" /> 
    </svg></div>
</div>
<?php
function carre($hauteur, $couleur, $hauteur2, $couleur2, $hauteur3, $couleur3){
    $vbheight = 300;
    // echo $hauteur . " " . $couleur . " " . $hauteur2 . " " . $couleur2 . " " . $hauteur3 . " " . $couleur3 ;
    // echo $vbheight - $hauteur . " " . $vbheight - $hauteur2 . " " . $vbheight - $hauteur3 ;
    ?>
     <svg width="60" height="<?php echo $vbheight?>">
  <rect y= "<?php echo ($vbheight - $hauteur)?>" width="20" height="<?php echo $hauteur?>" style="fill:<?php echo $couleur?>" />
  <rect y= "<?php echo ($vbheight - $hauteur2)?>" x="20" width="20" height="<?php echo $hauteur2?>" style="fill:<?php echo $couleur2?>" />
  <rect y= "<?php echo ($vbheight - $hauteur3)?>" x="40" width="20" height="<?php echo $hauteur3?>" style="fill:<?php echo $couleur3?>" />
</svg>
    <?php
}?>
    <?php
    function graduation(){
        $vbheight = 300;
        ?>
        <svg width="40" height="<?php echo $vbheight?>">
        <?php for ($i = 0; $i <= 10; $i++) {
        ?> <rect y= "<?php echo((($vbheight-4)/10)*$i)?>" x="4" width="20" height="4" style="fill: red" /><?php
        }?>
        <?php for ($i = 0; $i <= 20; $i++) {
        ?> <rect y= "<?php echo((($vbheight-4)/20)*$i)?>" x="24" width="20" height="4" style="fill: grey" /><?php
        }?>
    <rect y= "0" x="20" width="4" height="300" style="fill: black" />
        
    </svg>
        <?php
    }?>
    <?php
    function graduation2(){
        $vbheight = 300;
        ?>
        <svg width="40" height="<?php echo $vbheight?>">
        <?php for ($i = 0; $i <= 10; $i++) {
        ?> <rect y= "<?php echo((($vbheight-4)/10)*$i)?>" x="4" width="20" height="4" style="fill: green" /><?php
        }?>
    <rect y= "0" x="20" width="4" height="300" style="fill: black" />
        
    </svg>
        <?php
    }?>
<div class="graphs">

        <div class="graph">
        <?php
        ?><div class="barre"><?php
        graduation();
        ?><div class="legende">CO2, CO (ppm)</div></div><div class="barre"><?php
        foreach($data as $jour){
            $co = $jour['mo'];
            $co2 = $jour['co2'];
            $son = $jour['decibel'];
            $date = $jour['day_year'];
            $date = DateTime::createFromFormat('Y z', strval($jour['year']) . ' ' . strval($jour['day_year']));
            carre($co, "#38F44B", $co2, "#676767", $son, "#F97474");
            ?><div class="legende"><?php echo $date->format('d-m-Y') ?></div></div><div class="barre"><?php
        }
// Partie laissée volontairement en statique 
        graduation2();
        ?><div class="legende"><francais>Volume Sonore (dB)</francais><anglais>Noise Level (dB)</anglais></div></div>
</div><br>        <br> <br> 
<svg width="60%" height="60">
  <rect y="30" width="100%" height="1" style="fill:black" />
</svg>
  <div class="graph">
        <?php
        ?><div class="barre"><?php
        graduation();
        ?><div class="legende">CO2, CO (ppm)</div></div><div class="barre"><?php
        carre(300, "#38F44B", 30, "#676767", 80, "#F97474");
        ?><div class="legende"><francais>Semaine 1</francais><anglais>Week 1</anglais></div></div><div class="barre"><?php
        carre(110, "#38F44B", 99, "#676767", 100, "#F97474");
        ?><div class="legende"><francais>Semaine 2</francais><anglais>Week 2</anglais></div></div><div class="barre"><?php
        carre(34, "#38F44B", 29, "#676767", 81, "#F97474");
        ?><div class="legende"><francais>Semaine 3</francais><anglais>Week 3</anglais></div></div><div class="barre"><?php
        carre(34, "#38F44B", 29, "#676767", 81, "#F97474");
        ?><div class="legende"><francais>Semaine 4</francais><anglais>Week 4</anglais></div></div><div class="barre"><?php

        graduation2();
        ?><div class="legende"><francais>Volume Sonore (dB)</francais><anglais>Noise Level (dB)</anglais></div></div>
    </div>
</div>
<br> <br> <br> <br> 
<?php
include("../structure/footer.php");
?>
</html>