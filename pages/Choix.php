<?php 
include('../includes/fonctions.php');?>
<?php $idcategorie = $_GET['idcategorie'];
$nomcategorie = getNomCategorie($idcategorie);
$listecontenu = getListeContenu($idcategorie);
?>
<!DOCTYPE html>
<!--
Template Name: Kiraric
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Réchauffement climatique:<?php echo $nomcategorie[0]['nom'];?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="keywords" content="rechauffement, climat,carbone">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="liste.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
  
      <h1><a href="#">
      Réchauffement climatique : <?php echo $nomcategorie[0]['nom'];?>
      </a></h1> 
    </div>
 <?php include('nav1.php');?>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/rechauffement-climatique.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">Réchauffement climatique :  <?php echo $nomcategorie[0]['nom'];?></h2>
      <p>Velit est et urna mauris in mauris sed vitae vitae purus nulla varius risus ipsum et pulvinar erat egestas ac.</p>
      <footer><a class="btn" href="#">Consectetur</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    LISTE ARTICLES DANS CETTE CATEGORIE
    <!-- ################################################################################################ -->
    <div class="group">
<?php foreach($listecontenu as $contenu){
  ?>

  <article class="one_third"> 
        <!-- ################################################################################################ -->
        <img src="../<?php echo $contenu['images'];?>" alt="">
        <div class="txtwrap">
          <h6 class="heading"><?php echo $contenu['titre'];?></h6>
          <time class="font-xs block btmspace-10" datetime="<?php echo $contenu['datearticle'];?>"><?php echo $contenu['datearticle'];?></time>
          <p><?php echo $contenu['soustitre1'];?>[&hellip;]</p>
        <footer><a class="btn" href="<?php echo $contenu['catslug'];?>-<?php echo $contenu['titreslug'];?>-<?php echo $contenu['id'];?>">Lire l'article &raquo;</a></footer>
      </article>
<?php }?>
</div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

      <!-- ################################################################################################ -->
     <?php include('bas.php');?>
      <!-- ################################################################################################ -->
  
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
  
 
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
<?php include('footer.php');?>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>