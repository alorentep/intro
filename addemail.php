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
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
	?>
		
	<h1>Thanks for submitting the form.</h1>
	<p>First name: <?php echo $firstname;?></p>
	<p>Last name: <?php echo $lastname;?></p>
	<p>Email:<?php echo $email;?> 

	<?php
		$subject=$_POST ['subject'];
		$msg=$_POST ['msg'];
		
	echo $query."<br/>";
	$dbc = mysqli_connect('172.16.1.92', 'alorentep', 'alfonso', 'elvis_store')
	or die('Error connecting to MySQL server.');
	$query = "SELECT * from email_list";
	$result = mysqli_query($dbc, $query);
	
	echo "firstname:".$result ['firstname']."lastname:".$result ['lastname'].
	or die('Error querying database.');
	mysqli_close($dbc);
	
	?>
</body>

</html>
