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

$resultado = $mysqli->query("SELECT a.first_name, a.last_name, s.salary, d.dept_name, t.title FROM employees a
INNER JOIN salaries s ON a.emp_no=s.emp_no
INNER JOIN titles t ON a.emp_no=t.emp_no
INNER JOIN dept_emp e ON a.emp_no=e.emp_no
INNER JOIN departments d ON e.dept_no=d.dept_no
WHERE s.to_date between str_to_date ('1900-01-01','%Y-%m-%d') and str_to_date ('2000-01-01','%Y-%m-%d') and t.title='Senior Engineer'
group by a.last_name");

printf('<p>| Last Name | First Name | Salary | Dept Name |  Title | </p>');
while ($row=mysqli_fetch_assoc($resultado)){
	printf ('<p> %s | %s | %s | %s | %s </p>', $row['first_name'], $row['last_name'], $row['salary'], $row['dept_name'], $row['title']);
}

mysql_close($mysqli);
mysql_free_result($resultado);

?>

</body>
</html>