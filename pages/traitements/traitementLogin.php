<?php
include('../../includes/fonctions.php');
$username = $_POST['identifiant'];
  $password = $_POST['mdp'];
  $result = verifierLogin();
  /*foreach($result as $r)
  {
    if($r['identifiant']==$username && $r['mdp']==$password)
    {
      header("Location: ../AccueilAdmin.php");
    }
  }*/
  header("Location: ../admin.html");
?>