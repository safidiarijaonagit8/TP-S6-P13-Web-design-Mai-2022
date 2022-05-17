<?php
include('../../includes/fonctions.php');
$nomcategorie = $_POST['nomcategorie'];
insertCategorie($nomcategorie);
header("Location: ../admin.html");
?>

