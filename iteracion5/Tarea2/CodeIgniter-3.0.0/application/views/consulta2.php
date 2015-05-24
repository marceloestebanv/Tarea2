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
			urlController:"controlerbuton2"
		});	
	});
</script>
</head>
<body>

<ul id="lista">
<?php
foreach ($salarios->result() as $salarios) { 
		echo "<li>";
			echo "$salarios->emp_no | $salarios->salary";
		echo "</li>";
 } ?>
</ul>
<button id="cargaMas">Cargar más</button>
 
</body>
</html>