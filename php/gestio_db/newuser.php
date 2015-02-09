<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Inscripcio de Nou Usuari</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
    $nom = "";
    $cif = "";
    $domicili = "";
    $codipostal = "";
    $telefon = "";
        if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $cif = $_POST['cif'];
        $domicili = $_POST['domicili'];
        $codipostal = $_POST['codipostal'];
        $telefon = $_POST['telefon'];
        echo "nom: $nom cif: $cif<br>";
        $output_form = false;
        
        if (empty($nom) || empty($cif)||empty($domicili)||empty($codipostal)||empty($telefon)){
	?>
            <h2>Informació incompleta</h2>
            
	<?php
        }else{
            $output_form=true;
            }
            
        if ($output_form){
        $dbc = mysqli_connect('172.16.1.115', 'alorentep', 'alfonso', 'gestio_db')
        or die('Error connecting to MySQL server.');
        $query = "insert into client (nom,cif,domicili,codipostal,telefon) 
                    values ('$nom','$cif','$domicili','$codipostal','$telefon');";
        echo "___".$query."<br/>";
        $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
        mysqli_close($dbc);
        $nom = "";
        $cif = "";
        $domicili = "";
        $codipostal = "";
        $telefon = "";
            
            }
    }
        
    ?>
	
	 <h1>Inscripcio de Nou Usuari</h1>
    <form method="post" action="newuser.php">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" /><br />
        <label for="cif">CIF:</label>
        <input type="text" id="cif" name="cif" /><br />
        <label for="domicili">Domicili:</label>
        <input type="text" id="domicili" name="domicili" /><br />
        <label for="codipostal">Codi Postal</label>
        <input type="text" id="codipostal" name="codipostal" /><br />
        <label for="telefon">Telefon</label>
        <input type="text" id="telefon" name="telefon" /><br />
        
        <input type="submit" value="Envia dades" name="submit" />
    </form>
    
</body>

</html>
