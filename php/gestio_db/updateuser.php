<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Update Llistat</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>

	<?php
	$id = "";
	$nom = "";
	$cif = "";
	$domicili = "";
	$codipostal = "";
	$telefon="";
	$dbc = mysqli_connect('172.16.1.115', 'alorentep', 'alfonso', 'gestio_db')
			or die('Error connecting to MySQL server.');
	if (isset($_POST['submit'])) {
			//hem de fer update
			//recollim els valors amb $_POST
			$id=$_POST['id'];
			$nom=$_POST['nom'];
			$cif=$_POST['cif'];
			$domicili=$_POST['domicili'];
			$codipostal=$_POST['codipostal'];
			$telefon=$_POST['telefon'];
			
			//CONSTRUIM UPDATE
			$sql="UPDATE users SET id='$id',nom='$nom',cif='$cif',
			domicili='$domicili',codipsotal='$codipostal',telefon='$telefon'
			where id=$id";
			$result = mysqli_query($dbc, $sql)
			or die('Error querying database.');
			echo "$sql <br>";
	}else{
 
	//hem fet clic a un usuari i el volem editar
		$id=$_GET['id'];
		echo "id: $id<br>";
		
		$sql="select id,nom,cif,domicili,codipostal,telefon from users where id=$id";
		$result = mysqli_query($dbc, $sql) or die('Error querying database.');
		$row = mysqli_fetch_array($result);
    
		$id=$row['id'];
		$nom=$row['nom'];
		$cif=$row['cif'];
		$domicili=$row['domicili'];
		$codipostal=$row['codipostal'];
		$telefon=$row['telefon'];
	}
    
    ?>

	<h1>Llistat d'usuari</h1>
    <form method="post" action="newuser_.php">
		<input type="text" name="id" value="<?= $id?>" />
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?=$nom?>" /><br />
        <label for="cif">CIF:</label>
        <input type="text" id="cif" name="cif" value="<?=$cif?>" /><br />
        <label for="domicili">Domicili:</label>
        <input type="text" id="domicili" name="domicili" value="<?=$domicili?>" /><br />
        <label for="codipostal">Codi Postal:</label>
        <input type="text" id="codipostal" name="codipostal" value="<?=$codipostal?>" /><br />
        <label for="telefon">Telefon:</label>
        <input type="text" id="telefon" name="telefon" value="<?=$telefon?>" /><br />
        
        <input type="submit" value="Desar" name="submit" />
    </form>
		<a href="llistatusuaris.php">Tornar al llistat</a>
</body>

</html>
