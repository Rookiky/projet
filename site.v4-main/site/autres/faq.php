<!DOCTYPE html>
<title>FAQ</title>

<html lang="fr">
<head>
    <link rel="stylesheet" href="../css/faq.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="../css/PageAccueil.css"/>
    <script src="../modele/traitement.js"></script>
</head>
<?php include ("../controleur/type_co.php");?>
<body>
    <titre class="titre_c">FAQ</titre>
    <br><br>



    <button class="buttonfaq" onclick=affichage(1)>
            <francais>Comment acheter HealthPoint ?</francais>
            <anglais>How to buy HeathPoint?</anglais>
    </button>
    <Reponse id=R1 style="display:none">
        <francais>Si vous êtes DRH ou CEO et que vous souhaitez fournir notre produit aux employés de votre entreprise,
        contactez-nous a l’adresse <a href="../autres/formulaire.php" id='mail'><bleu>healthpoint.chirong@gmail.com</bleu></a> en nous précisant : votre entreprise, le nombre d’employés qu’il faudra équiper
        (indiquez légèrement plus afin d’équiper immédiatement de nouveaux employés),
        parmi eux le nombre de comptes administrateurs, et le nombre de salles de votre entreprise.
        Nous vous recontacterons alors pour vous fournir un devis.</francais>

        <anglais>If you are HRD or CEO and would like to provide our product to your company's employees, contact us at
        <a href="../others/form.php" id='mail'><bleu>healthpoint.chirong@gmail.com</bleu></a> specifying: your company,
        the number of employees that will need to be equipped (indicate slightly more in order to immediately equip new employees), among them the number of accounts administrator, and the number of rooms in your company.
         We will then contact you to provide you with a quote.</anglais>
    </Reponse>

    <br><br>
    <button class="buttonfaq" onclick=affichage(2)>
            <francais>Mes chefs peuvent-ils voir les données de mon bracelet ?</francais>
            <anglais>Can my bosses see data of my bracelet?</anglais>
    </button>
    <Reponse id=R2 style="display:none">
        <francais>Non, ils n’y ont pas accès. Cependant en cas de dépassement du second seuil, les administrateurs Healthpoint
        de votre entreprise recevront une notification leur annonçant que vous avez un problème sans préciser les chiffres précis,
        c’est aussi le cas si il y a un dépassement prolongé du premier seuil.</francais>
        <anglais>No, they don't have access. However, if the second threshold is exceeded, your company's Healthpoint administrators
        will receive a notification telling them that you have a problem without specifying the precise figures, this is also the
        case if the first threshold is exceeded for a prolonged period.</anglais>
    </Reponse>

    <br><br>
    <button class="buttonfaq" onclick=affichage(3)>
        <francais>Le bracelet ne fonctionne pas, que dois-je faire ?</francais>
        <anglais>My bracelet doesn't work, what do I need to do?</anglais>
    </button>
    <Reponse id=R3 style="display:none">
        <francais>Il ne prend aucune mesure ?
        <br><br>
        Oui : assurez-vous qu’il est bien chargé et qu’il est à proximité d’un boitier. Si le problème persiste, contactez-nous.
        <br><br>
        Non : contactez-nous en précisant les mesures que ne marchent plus, nous vous demanderons de nous envoyer le bracelet pour
        que nous puissions changer les pièces non fonctionnelles.</francais>

        <anglais>Doesn't take any action?
        <br><br>
        Yes: make sure it is properly charged and that it is near a box. If the problem persists, contact us.
        <br><br>
        No: contact us and specify the measurements that no longer work, we will ask you to send us the bracelet
        so that we can change the non-functional parts.
        </anglais>
    </Reponse>
    
<br><br>
    <button class="buttonfaq" onclick=affichage(4)>
        <francais>Le boitier ne fonctionne pas, que dois-je faire ?</francais>
        <anglais>The box does not work, what should I do?</anglais>
    </button>
    <Reponse id=R4 style="display:none">
    <francais> Il ne prend aucune mesure ?
    <br><br>
    Oui : assurez-vous qu’il est bien branché et connecté au réseau. Si le problème persiste, contactez-nous.
    <br><br>
    Non : contactez-nous et précisant les mesures que ne marche plus, nous vous demanderons de nous envoyer le boitier pour
    que nous puissions changer les pièces non fonctionnelles.</francais>
    <anglais>Doesn't take any action?
     <br><br>
     Yes: make sure it is plugged in and connected to the network. If the problem persists, contact us.
     <br><br>
     No: contact us and specify the measurements that no longer work, we will ask you to send us the box
     so that we can change the non-functional parts.</anglais>
    </Reponse>
    <br><br><br><br><br>
    <div style="height:135px"></div>
</body>

<?php 
    include ("../structure/footer.php");
?>

</html>
