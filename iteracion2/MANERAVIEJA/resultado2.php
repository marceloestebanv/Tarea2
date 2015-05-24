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

$resultado = $mysqli->query('SELECT emp_no, salary FROM salaries where salary IN("88208", "40000")');

printf('<p>| N° de empleados |  Salarios |</p>');
while ($row=mysqli_fetch_assoc($resultado)){
	printf ('<p> %s | %s </p>', $row['emp_no'] , $row['salary']);
}

mysql_close($mysqli);
mysql_free_result($resultado);

?>

</body>
</html>