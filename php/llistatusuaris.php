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
	$dbc = mysqli_connect('172.16.1.115', 'alorentep', 'alfonso', 'users')
		or die('Error connecting to MySQL server.');
	$sql="select id,usuari,nom,llinatge1,llinatge2 from users";
	$result = mysqli_query($dbc, $sql) or die('Error querying database.');
	?>
	
	<h1>Llistat d'usuari</h1>
	<table border="1">
		<tr>
			<th>&nbsp;</th>
			<th>id</th>
			<th>usuari</th>
			<th>nom</th>
			<th>llinatge1</th>
			<th>llinatge2</th>
		</tr>
	<?php
	while($row = mysqli_fetch_array($result)){
		?>
		<tr>
				<td>&nbsp;</td>
				<td><?=$row['id']?></td>
				<td><a href="updateuser.php?id=<?=$row['id']?>"><?=$row['usuari']?></a></td>
				<td><?=$row['nom']?></td>
				<td><?=$row['llinatge1']?></td>
				<td><?=$row['llinatge2']?></td>
		</tr>
		
		<?php
		}
	?>
	</table>
</body>

</html>
