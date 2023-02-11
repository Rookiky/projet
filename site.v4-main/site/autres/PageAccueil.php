<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/PageAccueil.css"/>
    </head>
    <body>
    <?php 
        include ("../controleur/type_co.php");
    ?>

    <div class="background-main">
        <div class="bodyLeft">
                <p class="title">Chiron Group</p>
                <francais><p class="accroche">Une nouvelle expérience santé</p>
                <div class="bodydownleft">
                    <p id="titre_produit">Produits</p>
                    <div class="produit">
                        <img class="frame" src="../img/produit.png" alt="photo du produit" />
                        <div class="prod_desc">
                            <p>HealthPoint</p>
                            <img id="healthpoint" alt="HealthPoint" src="../img/HealthpointLogo.png">
                            <div class="arrow_group">
                                <img id="arrow" src="../img/arrow.png" alt="arrow" />
                                 <a href="../autres/inscriptionUser.php">Découvrir</a>
                            </div>
                        </div>
                    </div>
                </div></francais>
                <anglais><p class="accroche">A new health experience</p>
                <div class="bodydownleft">
                    <p id="titre_produit">Products</p>
                    <div class="produit">
                        <img class="frame" src="../img/produit.png" alt="photo du produit" />
                        <div class="prod_desc">
                            <p>HealthPoint</p>
                            <img id="healthpoint" alt="HealthPoint" src="../img/HealthpointLogo.png">
                            <div class="arrow_group">
                                <img id="arrow" src="../img/arrow.png" alt="arrow" />
                                 <a href="../autres/inscriptionUser.php">Discover </a>
                            </div>
                        </div>
                    </div>
                </div></anglais>
            </div>
            <div class="bodyRight">
                <francais><a href="../vue/a_propos.php" id="texte_rouge">Qui sommes-nous?</a>
                <p class="qui-sommes-nous">Nous sommes un groupe d'ingénieurs désireux de mettre la technologie au service de notre société ainsi que de la votre. </p>
                <img src="../img/chironGroup.png" alt="chiron" class="right-logo" /></francais>
                <anglais><a href="../vue/a_propos.php" id="texte_rouge">Who are we?</a>
                <p class="qui-sommes-nous">We are a group of engineers who want to put technology at the service of our society as well as yours. </p>
                <img src="../img/chironGroup.png" alt="chiron" class="right-logo" /></anglais>
            </div>  
    </div>
    <?php 
        include ("../structure/footer.php")
    ?>

    </body>
   
</html>