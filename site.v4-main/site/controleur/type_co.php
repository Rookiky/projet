<?php

session_start();


if (isset($_SESSION['type'])){
    if ($_SESSION['type']=="User") {
        include ("../structure/header_co_user.html");
    }
    elseif ($_SESSION['type']=="Company" ) {
        include ("../structure/header_co_company.html");
    } 
    else if ($_SESSION['type']=="Admin") {
        include ("../structure/header_co_admin.html");
    }
    else  {
        include ("../structure/header_deco.html");
}} else {
    include ("../structure/header_deco.html");
}

?>