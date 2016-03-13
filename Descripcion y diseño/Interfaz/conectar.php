<?php

try
{
	//Abrir conexión con la BBDD utilizando PDO
  $con = new PDO('mysql:host=localhost;dbname=personal', 'user', 'pass');
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 	//Recuperar datos de la BBDD con prepare()
  $stmt = $con->prepare('SELECT * FROM Ataques');
  $stmt->execute();
 
  while( $datos = $stmt->fetch() )
    echo $datos[0] . '<br/>';
}
catch(PDOException $e)
{
  echo 'Error: ' . $e->getMessage();
}

# close the connection
$DBH = null;

?>


// Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";