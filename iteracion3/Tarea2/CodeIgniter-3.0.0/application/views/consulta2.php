<!DOCTYPE html>
<html lang='es'>
<head>
	<title>Tarea 2</title>
<meta charset='utf-8'>
</head>
<body>

<?php

foreach ($salarios->result() as $salarios) { 
	echo "<ul>";
		echo "<li>";
			echo "$salarios->emp_no | $salarios->salary";
		echo "</li>";
	echo "</ul>";
 } ?>
 
</body>
</html>