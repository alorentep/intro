<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Llistat d'usuaris</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
	$dbc = mysqli_connect('172.16.1.115', 'alorentep', 'alfonso', 'gestio_db')
		or die('Error connecting to MySQL server.');
		
	if (isset($_POST['submit'])){
		echo "esborrar usuaris<br>";
		foreach ($_POST['todelete'] as $delete_id){
           echo "...esborrant $delete_id<br>";
           $sql="DELETE FROM users where id=$delete_id";
           $result = mysqli_query($dbc, $sql) or die('Error querying database.');
       }
       
    }
    
	$sql="select id,nom,cif,domicili,codipostal,telefon from client";
	$result = mysqli_query($dbc, $sql) or die('Error querying database.');
	
	
	?>
	<h1>Llistat d'usuari</h1>
	<table border="1">
		<tr>
			<th>&nbsp;</th>
			<th>ID</th>
			<th>Nom</th>
			<th>CIF</th>
			<th>Domicili</th>
			<th>Codi Postal</th>
			<th>Telefon</th>
		</tr>
		
	<form method="post" action="llistatusuaris.php">
	<?php
	while($row = mysqli_fetch_array($result)){
		?>
		<tr>
				<td>&nbsp;</td>
				<td><?=$row['id']?></td>
				<td><a href="updateuser.php?id=<?=$row['id']?>"><?=$row['nom']?></a></td>
				<td><?=$row['cif']?></td>
				<td><?=$row['domicili']?></td>
				<td><?=$row['codipostal']?></td>
				<td><?=$row['telefon']?></td>
		</tr>
		
		<?php
		}
	?>
	</table>
	<input type="submit" name="submit" value="esborrar seleccionats" />
	</form>
</body>

</html>
