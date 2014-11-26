
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
		$name=$_POST['name'];
		$llinatge1=$_POST['llinatge1'];
		$llinatge2=$_POST['llinatge2'];
	?>
		
	<h1>Thanks for submitting the form.</h1>
	<p>User: <?php echo $user;?></p>
	<p>Password: <?php echo $password;?></p>
	<p>Nom:<?php echo $name;?> 
	<p>Llinatge 1:<?php echo $llinatge1;?></p>
	<p>Llinatge 2: <?php echo $llinatge2;?></p>
		
	<?php	
	$dbc = mysqli_connect('172.16.1.92', 'alorentep', 'alfonso', 'users')
	or die('Error connecting to MySQL server.');
	$query = "INSERT INTO users (user, password, name, llinatge1, llinatge2)
		value ('$user','$password','$name','$llinatge1','$llinatge2');";
	echo "____".$query."<br/>";
	$result = mysqli_query($dbc, $query)
	or die('Error querying database.');
	mysqli_close($dbc);
	
	?>
	
</body>

</html>
