<?php 
include('../includes/fonctions.php');
$idcategorie = $_GET['idcategorie'];
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
<title>Réchauffement climatique </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="keywords" content="rechauffement, climat,carbone">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="liste.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Owl Carousel main css -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<!-- This core.css file contents all plugings css file. -->
<link rel="stylesheet" href="css/core.css">
<!-- Theme shortcodes/elements style -->
<link rel="stylesheet" href="css/shortcode/shortcodes.css">
<!-- Theme main style -->
<link rel="stylesheet" href="css/style.css">
<!-- Responsive css -->
<link rel="stylesheet" href="css/responsive.css">
<!-- User style -->
<link rel="stylesheet" href="css/custom.css">

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
    
      </a></h2> 
    </div>
 <?php include('navAdmin.php');?>
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
      <li><a href="#">Contenu</a></li>
      <li><a href="#">Ajout</a></li>
      <li><a href="#"></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/rechauffement-climatique.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">  </h2>
      <p></p>
      <footer><a class="btn" href="#">Réchauffement climatique</a></footer>
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
    <form method='post' action='traitements/traitementInsertContenu.php' 
        enctype='multipart/form-data'>
    
    <div class="content three_quarter first"> 
      <!-- ################################################################################################ -->
      <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
      <input type="text"  name="titre">
    </div>
  </div>
</br>
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Sous titre 1</label>
    <div class="col-sm-10">
      <input type="text" name="st1">
    </div>
  </div>
  </br>
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Article 1</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" name="art1" placeholder=" " rows="8"></textarea>
    </div>
  </div>
</br>
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Sous titre 2</label>
    <div class="col-sm-10">
      <input type="text"  name="st2">
    </div>
  </div>
  </br>
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Article 2</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" name="art2" placeholder=" " rows="8"></textarea>
    </div>
  </div>
  </br>
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Sous titre 3</label>
    <div class="col-sm-10">
      <input type="text" name="st3">
    </div>
  </div>
  </br>
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Article 3</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" name="art3" placeholder=" " rows="8"></textarea>
    </div>
  </div>

  <div class="mb-3">
<input  type="hidden" name="idcategorie" value="<?php echo $idcategorie;?>">
</div>
</br>
<div class="mb-3">
  <label for="formFile" class="form-label">Image article</label>
  <input name="image" type="file" class="form-control" required="required"/>
</div>
</br>
<input class="" type="submit" value="Ajouter">

</form>


      
   
      </div>
    </div>
  </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include('bas.php');?>
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
<script src="js/bootstrap.min.js"></script>
</body>
</html>