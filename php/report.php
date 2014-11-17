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
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$how_many_did_you_see = $_POST['howmany'];
	$what_did_they_do_to_you = $_POST['fangspotted'];
	$when_it_happened = $_POST['whenithappened'];
	$how_long = $_POST['howlong'];
	$alien_description = $_POST['aliendescription'];
	$fang_spotted = $_POST['fangspotted'];
	$email = $_POST['email'];
	$nsg = $name. ' was abducted ' . $when_it_happened. ' and was gone for ' . $how_long . '.' . 'Number of aliens:' . $how_many . 'Alien description: ' . $alien_description . 'What they did: ' . $what_they_did . 'Fang spotted: ' . $fang_spotted . 'Other comments: ' . $other:
	?>
	<h1>Thanks for submitting the form.</h1>
	<p>You where abducted <?php echo $when_it_happened;?> and where gone for<?php echo $how_long;?></p>
	<p>Describe them: <?php echo $alien_description;?></p>
	<p>Was Fang there? <?php echo $fang_spotted;?></p>
	<p>Your email address is <?php echo $email;?></p>
	
</body>

</html>
