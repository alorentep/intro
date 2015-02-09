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
	$ean = "";
	$descripcio = "";
	$preu = "";
	$categoria = "";
	$fabricant="";
	$dbc = mysqli_connect('172.16.1.115', 'alorentep', 'alfonso', 'gestio_db')
			or die('Error connecting to MySQL server.');
	if (isset($_POST['submit'])) {
			//hem de fer update
			//recollim els valors amb $_POST
			$id=$_POST['id'];
			$ean=$_POST['ean'];
			$descripcio=$_POST['descripcio'];
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
        <label for="ean">Ean:</label>
        <input type="text" id="ean" name="ean" value="<?=$ean?>" /><br />
        <label for="descripcio">Descripcio:</label>
        <input type="text" id="descripcio" name="descripcio" value="<?=$descripcio?>" /><br />
        <label for="preu">Preu:</label>
        <input type="text" id="preu" name="preu" value="<?=$preu?>" /><br />
        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" value="<?=$categoria?>" /><br />
        <label for="fabricant">Fabricant:</label>
        <input type="text" id="fabricant" name="fabricant" value="<?=$fabricant?>" /><br />
        
        <input type="submit" value="Desar" name="submit" />
    </form>
		<a href="llistatarticles.php">Tornar al llistat</a>
</body>

</html>
