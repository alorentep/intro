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
		$subject=$_POST ['subject'];
		$promo=$_POST ['promo'];
		
	if ((!empty/$subject) && (!empty/$promo)){
		
	echo "SUBJECT: $subject MSG: $msg<br/>";
	$dbc = mysqli_connect('172.16.1.92', 'alorentep', 'alfonso', 'elvis_store')
	or die('Error connecting to MySQL server.');
	$query = "SELECT first_name, last_name, email from email_list ORDER BY last_name, first_name";
	$result = mysqli_query($dbc, $query);
	?>
	<table border="1" cellpadding="0" cellspacing="0"></table>
</body>

</html>
