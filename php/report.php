<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	
	<?php
	$first_name = $_POST ['firstname'];
	$last_name = $_POST ['lastname'];
	$how_many_did_you_see = $_POST ['howmany'];
	$what_did_they_do_to_you = $_POST ['whattheydid'];
	$when_it_happened = $_POST ['whenithappened'];
	$how_long = $_POST ['howlong'];
	$alien_description = $_POST ['aliendescription'];
	$fang_spotted = $_POST ['fangspotted'];
	$email = $_POST['email'];
	$other=$_POST['other'];
	
	?>
	<h1>msg:: <?php echo $msg;?></h1>
	<h1>Thanks for submitting the form.</h1>
	<p>First name: <?php echo $first_name;?></p>
	<p>Last name: <?php echo $last_name;?></p>
	<p>You where abducted <?php echo $when_it_happened;?> and where gone for<?php echo $how_long;?></p>
	<p>Describe them: <?php echo $alien_description;?></p>
	<p>What did they do to you? <?php echo $what_did_they_do_to_you;?></p>
	<p>Was Fang there? <?php echo $fang_spotted;?></p>
	<p>Your email address is <?php echo $email;?></p>
	
	<?php
	$dbc = mysqli_connect('172.16.1.92', 'alorentep', 'alfonso', 'aliendatabase') or die('Error connecting to MySQL server.');
	$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, " . 
	"how_many, alien_description, what_they_did, fang_spotted, other, email) " . "
	VALUES ('$first_name', '$last_name ', '3 days ago', '1 day', 'four', 'green with six tentacles', " . 
	"'We just talked and played with a dog', 'yes', 'I may have seen your dog. Contact me.', " . 
	"'sally@gregs-list.net')";
	echo "____".$query."<br/>";
	$result = mysqli_query($dbc, $query)
	or die('Error querying database.');
	mysqli_close($dbc);
	?>
	
</body>

</html>
