<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Llistat d'articles</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
	$dbc = mysqli_connect('172.16.1.115', 'alorentep', 'alfonso', 'gestio_db')
		or die('Error connecting to MySQL server.');
		
	if (isset($_POST['submit'])){
		echo "esborrar article<br>";
		foreach ($_POST['todelete'] as $delete_id){
           echo "...esborrant $delete_id<br>";
           $sql="DELETE FROM article where id=$delete_id";
           $result = mysqli_query($dbc, $sql) or die('Error querying database.');
       }
       
    }
    
	$sql="select id,ean,descripcio,preu,categoria,fabricant from article";
	$result = mysqli_query($dbc, $sql) or die('Error querying database.');
	
	
	?>
	<h1>Llistat d'articles</h1>
	<table border="1">
		<tr>
			<th>&nbsp;</th>
			<th>ID</th>
			<th>Ean</th>
			<th>Descripcio</th>
			<th>Preu</th>
			<th>Categoria</th>
			<th>Fabricant</th>
		</tr>
		
	<form method="post" action="llistatarticles.php">
	<?php
	while($row = mysqli_fetch_array($result)){
		?>
		<tr>
				<td>&nbsp;</td>
				<td><?=$row['id']?></td>
				<td><a href="updateuser.php?id=<?=$row['id']?>"><?=$row['ean']?></a></td>
				<td><?=$row['descripcio']?></td>
				<td><?=$row['preu']?></td>
				<td><?=$row['categoria']?></td>
				<td><?=$row['fabricant']?></td>
		</tr>
		
		<?php
		}
	?>
	</table>
	<input type="submit" name="submit" value="esborrar seleccionats" />
	</form>
</body>

</html>
