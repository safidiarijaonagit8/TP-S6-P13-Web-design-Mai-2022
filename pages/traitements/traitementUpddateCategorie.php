<?php
include('../../includes/fonctions.php');
$idcategorie = $_POST['idcategorie'];
$nom = $_POST['nom'];
updateCategorie($idcategorie,$nom);

header("Location: ../admin.html");
?>
