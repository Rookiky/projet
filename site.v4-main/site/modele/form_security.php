<?php

function test_input($data) {
  $data = trim($data); //Supprimer les espaces avant et après
  $data = stripslashes($data); // supprime les "\"
  $data = htmlspecialchars($data); //injections XSS
  return $data;
}

?>

