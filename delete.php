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
		$email=$_POST['Email'];
	?>
		
	<h1>Esteim molt trists perque ens deixes</h1>
	<p>Torna quan vulguis <?php echo $email;?></p>
		
	<?php	
	$dbc = mysqli_connect('172.16.1.92', 'alorentep', 'alfonso', 'elvis_store')
	or die('Error connecting to MySQL server.');
	$query = "DELETE from email_list WHERE mail = '$email' ";
	echo "____".$query."<br/>";
	$result = mysqli_query($dbc, $query)
	or die('Error querying database.');
	mysqli_close($dbc);
	
	?>
</body>

</html>
