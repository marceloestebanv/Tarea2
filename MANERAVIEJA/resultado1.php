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

$resultado = $mysqli->query('SELECT * FROM employees where gender = "M" OR first_name = "Mary"');

printf('<p> | N° de empleados | </p>');
while ($row=mysqli_fetch_assoc($resultado)){
	printf ('<p> %s </p>', $row['emp_no']);
}

?>

</body>
</html>