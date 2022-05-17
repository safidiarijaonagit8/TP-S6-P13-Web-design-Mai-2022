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
//$images =  $_POST['imageart'];


if(ISSET($_POST['titre'])){
    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];
    $allowed_ext = array("jpeg", "jpg", "gif", "png");
    $exp = explode(".", $file_name);
    $ext = end($exp);
    $path = "../../images/demo/".$file_name;
    if(in_array($ext, $allowed_ext)){
        if(move_uploaded_file($file_temp, $path)){
       
            try{
            $images = "images/demo/".$file_name;
            insertContenu1($titre,$idcategorie,$st1,$art1,$st2,$art2,$st3,$art3,$images);
            echo $images;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
}
$idcontenu = getLastId();
$nomcategorie = getNomCategorie($idcategorie);
$catslug = slugify($nomcategorie[0]['nom'], $word_delimiter='-');
$titreslug = slugify($titre, $word_delimiter='-');
insertUrl($idcontenu[0]['idfarany'],$catslug,$titreslug);
header("Location: ../admin-liste-article-$idcategorie.html");
?>


