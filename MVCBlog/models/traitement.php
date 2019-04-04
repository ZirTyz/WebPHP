<?php
$nom = $_POST['user_name'];
$prenom = $_POST['user_pren'];
$psw = $_POST['user_psw'];
if (isset($nom)) {
  if(isset($prenom)){
    if (isset($psw)) {
      echo "tout est bon";
      echo $nom;
      echo $prenom;
      echo $psw;
      }
    }
  }
?>
