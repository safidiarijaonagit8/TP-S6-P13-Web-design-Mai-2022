<?php 
include('../includes/fonctions.php');?>
<?php $idcontenu = $_GET['idcontenu'];

$contenu = getDetailContenu($idcontenu);

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
<title><?php echo $contenu[0]['titre'];?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="Description" content="<?php echo $contenu[0]['soustitre1'];?>,<?php echo $contenu[0]['soustitre2'];?>,<?php echo $contenu[0]['soustitre3'];?> " />
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
  
      <h2><a href="#">
      <?php echo $contenu[0]['nom'];?>
      </a></h2> 
    </div>
 <?php include('nav1.php');?>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Categorie</a></li>
      <li><a href="#"><?php echo $contenu[0]['nom'];?></a></li>
      <li><a href="#"><?php echo $contenu[0]['titre'];?></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/rechauffement-climatique.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">  <?php echo $contenu[0]['nom'];?></h2>
      <p><?php echo $contenu[0]['titre'];?></p>
      <footer><a class="btn" href="#">Consectetur</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">

</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter first"> 
      <!-- ################################################################################################ -->
      <h1><?php echo $contenu[0]['titre'];?></h1>
      <h3><?php echo $contenu[0]['soustitre1'];?></h3>
      <img class="imgr borderedbox inspace-5" src="../<?php echo $contenu[0]['images'];?>" alt="">
      
      <p><?php echo $contenu[0]['article1'];?></p>
      
      <img class="imgl borderedbox inspace-5" src="../<?php echo $contenu[0]['images'];?>" alt="">
      <h3><?php echo $contenu[0]['soustitre2'];?></h3>
      <p><?php echo $contenu[0]['article2'];?></p>


</br>
</br>
<h3><?php echo $contenu[0]['soustitre3'];?></h3>
      <p><?php echo $contenu[0]['article3'];?></p>

      
      </div>
    </div>
  </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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