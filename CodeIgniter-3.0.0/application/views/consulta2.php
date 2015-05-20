<!DOCTYPE html>
<html lang='es'>
<head>
	<title>Tarea 2</title>
<meta charset='utf-8'>
</head>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "employees");
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



$resultado = $mysqli->query('SELECT first_name FROM employees');
/*cuantos registros ha contado*/
$total=mysql_num_rows($resultado);

echo "<table><tr><td> Nombre </td>";
while ($dato=mysql_fetch_array($resultado)) {
	echo "";
	echo $dato['first_name'];
}

  
    /* librar resultados */
    $resultado->close();

?>
</body>
</html>