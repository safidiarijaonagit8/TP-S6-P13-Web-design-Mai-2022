<?php
	include("connection.php");

	function getListeCategorie()
	{
	    $sql="SELECT * FROM categorie";
	    $result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
	function getAllContenu()
	{
	    $sql="SELECT * FROM contenu";
	    $result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
	function getNomCategorie($idcategorie)
	{
		$sql="SELECT id,nom FROM categorie where id = %s";
		$sql = sprintf($sql,$idcategorie);
		$result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
	function getListeContenu($idcategorie)
	{
		$sql="SELECT c.id,c.titre,c.soustitre1,c.soustitre2,c.soustitre3,s.titreslug,s.catslug,c.datearticle FROM contenu c LEFT JOIN contenuslug s ON c.id=s.idcontenu WHERE c.idcategorie = %s";
		$sql = sprintf($sql,$idcategorie);
		$result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
	function getListeContenu1($idcategorie)
	{
		$sql="SELECT * FROM contenu WHERE idcategorie = %s";
		$sql = sprintf($sql,$idcategorie);
		$result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
	function getDetailContenu($idcontenu)
	{
		$sql="SELECT c.id AS idcontenu,titre,nom,soustitre1,article1,soustitre2,article2,soustitre3,article3,images,datearticle FROM contenu c JOIN categorie cat ON c.idcategorie=cat.id WHERE c.id = %s";
		$sql = sprintf($sql,$idcontenu);
		$result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
	function verifierLogin()
	{
		$sql = "SELECT * FROM administrateur";
		//$sql = sprintf($sql,$identifiant,$mdp);
	//	$sql = sprintf($sql,$idcategorie);
		$result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
	//url categorie ou titre plusieurs mots 
	function slugify($input, $word_delimiter='-') 
	{
		$slug = iconv('UTF-8', 'ASCII//TRANSLIT', $input);
		$slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
		$slug = strtolower(trim($slug, '-'));
		$slug = preg_replace("/[\/_|+ -]+/", $word_delimiter, $slug);
		return $slug;
	}

	 function insertCategorie($nomcategorie)
	{
		$sql = "INSERT INTO categorie (nom) VALUES (?)";
		$stmt= dbconnect()->prepare($sql);
		$stmt->execute([$nomcategorie]);
	}
	function insertContenu($titre,$idcategorie,$st1,$a1,$st2,$a2,$st3,$a3,$im)
	{
		
		$today = date("Y-m-d");
		$sql = "INSERT INTO contenu(titre,idcategorie,soustitre1,article1,soustitre2,article2,soustitre3,article3,images,datearticle) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')";
		$stmt= dbconnect()->prepare($sql);
		$stmt->execute([$titre,$idcategorie,$st1,$a1,$st2,$a2,$st3,$a3,$im,$today]);
		
	}
	function insertContenu1($titre,$idcategorie,$st1,$a1,$st2,$a2,$st3,$a3,$im)
	{
		
		$today = date("Y-m-d");
		$sql = "INSERT INTO contenu(titre,idcategorie,soustitre1,article1,soustitre2,article2,soustitre3,article3,images,datearticle) VALUES (?,?,?,?,?,?,?,?,?,?)";
		$stmt= dbconnect()->prepare($sql);
		$stmt->execute([$titre,$idcategorie,$st1,$a1,$st2,$a2,$st3,$a3,$im,$today]);
	}
	function updateCategorie($idcategorie,$nom)
	{
		$sql = "UPDATE categorie SET nom = ? WHERE id = ?";
		$stmt= dbconnect()->prepare($sql);
		$stmt->execute([$nom,$idcategorie]);
	}
    function updateContenu($titre,$idcategorie,$st1,$a1,$st2,$a2,$st3,$a3,$im,$idc)
	{
		$sql = "UPDATE contenu SET titre = '%s',idcategorie = '%s',soustitre1= '%s',article1= '%s',soustitre2= '%s',article2= '%s',soustitre3= '%s',article3= '%s',images= '%s',datearticle= '%s' WHERE id = '%s' ";
		$sql = sprintf($sql,$titre,$idcategorie,$st1,$a1,$st2,$a2,$st3,$a3,$im,$daty,$idc);
		// var_dump($sql);
		$resultat = dbconnect()->query($sql);
		$pdo->beginTransaction();
	}

	function deleteCategorie($idcategorie)
	{

	}
	function deleteContenu($idcontenu)
	{

	}
	function getLastId()
	{
		$sql="SELECT MAX(id) as idfarany FROM contenu";
		//$sql = sprintf($sql,$idcategorie);
		$result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
	function insertUrl($idcontenu,$catslug,$titreslug)
	{
		$sql = "INSERT INTO contenuslug (idcontenu,catslug,titreslug) VALUES (?,?,?)";
		$stmt= dbconnect()->prepare($sql);
		$stmt->execute([$idcontenu,$catslug,$titreslug]);		
	}
	function getUrl($idcontenu)
	{
		$sql="SELECT * FROM contenuslug WHERE idcontenu = %s";
		$sql = sprintf($sql,$idcontenu);
		$result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
	

?>