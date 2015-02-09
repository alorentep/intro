

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
    $dbc = mysqli_connect('172.16.1.115', 'alorentep', 'alfonso', 'elvis_store')
        or die('Error connecting to MySQL server.');
        
        
    if (isset($_POST['submit'])){
        echo "<h1>puc esborrar clients</h1>";
        foreach ($_POST['todelete'] as $delete_id){
			echo "esborrar client $delete id<br>";
			$sql="DELETE FROM email_list WHERE id=$";
			mysqli_query($dbc, $sql)
			or die('Error querying database.');
			}
        
        }
        
    $sql="SELECT * FROM email_list";
    $result = mysqli_query($dbc, $sql)
    or die('Error querying database.');
    
    ?>
    
    <h1>llistat clients</h1>
    
    
    <form action="delete_email.php" method="POST">
    
    <?php
        
    while($row = mysqli_fetch_array($result)){
        echo '<input type="checkbox" value="' . $row['id'] . '" name="todelete[]" />';
        echo $row['first_name']." ".$row['last_name']." ".$row['email']."<br>";
    }
    ?>
        <input type="submit" name="submit" value="esborrar seleccionats"/>
    </form>
     
   
   
   
   
   
   
   
   
   
   
    
	
</body>

</html>
