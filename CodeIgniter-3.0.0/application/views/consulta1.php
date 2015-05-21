<!DOCTYPE html>
<html lang='es'>
<head>
	<title>Tarea 2</title>
<meta charset='utf-8'>
</head>
<body>

<?php


foreach ($empleados->result() as $empleados) { 
	echo "<ul>";
		echo "<li>";
			echo "$empleados->emp_no";
		echo "</li>";
	echo "</ul>";
 } ?>

?>
</body>
</html>