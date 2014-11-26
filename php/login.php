<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sense títol</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	
	<?php
		$user=$_POST['user'];
		$password=$_POST['password'];
	?>
	
	<?php
		$dbc = mysqli_connect('172.16.1.92', 'alorentep', 'alfonso', 'login') or die('Error connecting to MySQL server.');
		$query = "INSERT INTO users (user, password)
			value ('$user','$password');";
		echo "____".$query."<br/>";
		
		$result = mysqli_query($dbc, $query);
		$row = mysqli_fetch_array($result);
		echo "row el password que ve de la base de dades es: ".$row['password']."<br/>";
		echo "el password que ens ve del formulari es: $password<br>";
		if ($password==$row['password']){
			echo "LOGIN CORRECTE<br>";
		}else{
			echo "LOGIN INCORRECTE<br>";
			}	
	?>
</body>

</html>
