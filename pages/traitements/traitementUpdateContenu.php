<?php 

include('../../includes/fonctions.php');
$titre = $_POST['titre'];
$st1 = $_POST['st1'];
$art1 = $_POST['art1'];
$st2 = $_POST['st2'];
$art2 = $_POST['art2'];
$st3 = $_POST['st3'];
$art3 = $_POST['art3'];
$idcategorie = $_POST['idcategorie'];
$images =  $_POST['imageart'];

updateContenu($titre,$idcategorie,$st1,$art1,$st2,$art2,$st3,$art3,$images);
$idcontenu = getLastId();
$nomcategorie = getNomCategorie($idcategorie)
$catslug = slugify($nomcategorie, $word_delimiter='-');
$titreslug = slugify($titre, $word_delimiter='-');
insertUrl($idcontenu[0]['idfarany'],$catslug,$titreslug);
header("Location: ../AccueilAdmin.php?update=1");
?>


