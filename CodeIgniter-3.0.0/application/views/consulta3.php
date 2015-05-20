<!DOCTYPE html>
<html lang='es'>
<head>
	<title>Tarea 2</title>
<meta charset='utf-8'>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","employees");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT first_name,last_name FROM employees ORDER BY Lastname LIMIT 0,30";
$result=mysqli_query($con,$sql)

// Numeric array
$row = mysqli_fetch_array($result,MYSQLI_NUM);
printf ("Nombre:%s Apellido: %s\n",$row[0],$row[1]);

// Associative array
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
printf ("%s (%s)\n",$row["first_name"],$row["last_name"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?> 
</body>
</html>