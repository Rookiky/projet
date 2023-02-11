<script>
defLangue()
function defLangue(){
    if (!sessionStorage.getItem('langue')){
        sessionStorage.setItem('langue','francais')
    }
    changeLangue(sessionStorage.getItem('langue'),0)
}

function changeLangue(langue,alerte){
    var txt_en = document.getElementsByTagName("anglais");
    var txt_fr = document.getElementsByTagName("francais");
    var k = 0;
    if (langue == "francais"){
        while (k < txt_en.length){
            txt_en.item(k).style.display='none';
            txt_fr.item(k).style.display='block';
            k ++
        }
        if (alerte==1){
            window.alert("Le site est maintenant en Français");
        }
    }
    if (langue == "anglais"){
        var k = 0;
        while (k < txt_en.length){
            txt_en.item(k).style.display='block';
            txt_fr.item(k).style.display='none';
            k ++
        }
        if (alerte==1){
            window.alert("The website is now in english");
        }
    }
}

function boutonchangeLangue(){
    if (sessionStorage.getItem('langue') == "francais"){
        sessionStorage.setItem('langue','anglais');
        changeLangue("anglais",1)
    }
    else{
        sessionStorage.setItem('langue','francais');
        changeLangue("francais",1)
    }
}

 </script>
<!--<button onclick="boutonchangeLangue();">Changer la langue</button>-->