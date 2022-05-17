<nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="#">Accueil</a></li>
        
        <?php $listeCategorie = getListeCategorie();?>
        <?php foreach($listeCategorie as $categorie){?> 
        <li><a href="listeContenuAdmin.php?idcategorie=<?php echo $categorie['id'];?>"><?php echo $categorie['nom'];?></a></li>
        <?php }?>
        <li><a href="../rechauffement-climatique.html">Se deconnecter</a></li>
      </ul>
    </nav>