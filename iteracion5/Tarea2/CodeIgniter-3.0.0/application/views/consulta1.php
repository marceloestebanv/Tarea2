<!DOCTYPE html>
<html lang='es'>
<head>
	<title>Tarea 2</title>
<meta charset='utf-8'>
<script type="text/javascript" src="/Tarea2/iteracion5/Tarea2/CodeIgniter-3.0.0/js/js.js"></script>
<script type="text/javascript" src="/Tarea2/iteracion5/Tarea2/CodeIgniter-3.0.0/js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		js.init({
			urlController:"controlerbuton1"
		});	
	});
</script>
</head>
<body>

<ul id='lista'>
<?php
foreach ($empleados->result() as $empleados) { 
		echo "<li>";
			echo "$empleados->emp_no";
		echo "</li>";
 } ?>
</ul>
<button id="cargaMas">Cargar más</button>

</body>
</html>