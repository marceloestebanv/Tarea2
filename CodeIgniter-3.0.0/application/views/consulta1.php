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



$resultado = $mysqli->query('SELECT * FROM titles where title = "Senior Staff" ');

/* saltar a la fila numero 400 */
$resultado->data_seek(399);

/* obtener fila */
    $row = $resultado->fetch_row();

    printf ("Numero: %s  Titles: %s From_date: %s   To_date: %s\n", $row[0] , $row[1] , $row[2] , $row[3]);

    /* librar resultados */
    $resultado->close();

?>
</body>
</html>