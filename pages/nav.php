<nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Accueil</a></li>
        
        <?php $listeCategorie = getListeCategorie();

        ?>
        <?php foreach($listeCategorie as $categorie){
          $url = slugify($categorie['nom'], $word_delimiter='-');
          ?> 
       <!-- <li><a href="pages/Choix.php?idcategorie=<?php echo $categorie['id'];?>"><?php echo $categorie['nom'];?></a></li>-->
       <li><a href="pages/rechauffement-climatique-<?php echo $categorie['nom'];?>-<?php echo $categorie['id'];?>.html"><?php echo $categorie['nom'];?></a></li>
        <?php }?>
        <li><a href="pages/loginAdmin.php">Se connecter en tant que admin</a></li>
      </ul>
    </nav>