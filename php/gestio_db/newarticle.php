<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Inscripcio de Nou Article</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
    $ean = "";
    $descripcio = "";
    $preu = "";
    $categoria = "";
    $fabricant = "";
        if (isset($_POST['submit'])) {
        $ean = $_POST['ean'];
        $descripcio = $_POST['descripcio'];
        $preu = $_POST['preu'];
        $categoria = $_POST['categoria'];
        $fabricant = $_POST['fabricant'];
        echo "ean: $ean descripcio: $cif<br>";
        $output_form = false;
        
        if (empty($ean) || empty($descripcio)||empty($preu)||empty($categoria)||empty($fabricant)){
	?>
            <h2>Informació incompleta</h2>
            
	<?php
        }else{
            $output_form=true;
            }
            
        if ($output_form){
        $dbc = mysqli_connect('172.16.1.115', 'alorentep', 'alfonso', 'gestio_db')
        or die('Error connecting to MySQL server.');
        $query = "insert into article (ean,descripcio,preu,categoria,fabricant) 
                    values ('$ean','$descripcio','$preu','$categoria','$fabricant');";
        echo "___".$query."<br/>";
        $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
        mysqli_close($dbc);
        $ean = "";
        $descripcio = "";
        $preu = "";
        $categoria = "";
        $fabricant = "";
            
            }
    }
        
    ?>
	
	 <h1>Inscripcio de Nou Article</h1>
    <form method="post" action="newuser.php">
        <label for="ean">Ean:</label>
        <input type="text" id="ean" name="ean" /><br />
        <label for="descripcio">Descripcio:</label>
        <input type="text" id="descripcio" name="descripcio" /><br />
        <label for="preu">Preu:</label>
        <input type="text" id="preu" name="preu" /><br />
        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" /><br />
        <label for="fabricant">Fabricant:</label>
        <input type="text" id="fabricant" name="fabricant" /><br />
        
        <input type="submit" value="Envia dades" name="submit" />
    </form>
    
</body>

</html>
