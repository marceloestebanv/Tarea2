<!DOCTYPE html>
<html lang='es'>
<head>
	<title>Tarea 2</title>
<meta charset='utf-8'>
</head>
<body>
 ola ke ase
<?php

foreach ($empleados->result() as $empleados) {
	echo "<ul>";
		echo "<li>";
			echo "$empleados->last_name | $empleados->first_name | $empleados->salary | $empleados->dept_name | $empleados->title";
		echo "</li>";
	echo "</ul>";
 } ?>
 
 <p>hola soy el nico</p>

</body>
</html>