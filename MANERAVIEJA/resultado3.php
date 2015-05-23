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

$resultado = $mysqli->query("SELECT a.first_name AS first_name, a.last_name as last_name, s.salary as salary, d.dept_name as dept_name, t.title as title FROM employees a, salaries s, titles t, departments d, dept_emp e WHERE a.emp_no=s.emp_no and a.emp_no=e.emp_no and e.dept_no=d.dept_no and s.to_date between str_to_date ('1900-01-01','%Y-%m-%d') and str_to_date ('2000-01-01','%Y-%m-%d') and t.emp_no=a.emp_no and t.title='Senior Engineer' group by a.last_name");

printf('<p>| Last Name | First Name | Salary | Dept Name |  Title | </p>');
while ($row=mysqli_fetch_assoc($resultado)){
	printf ('<p> %s | %s | %s | %s | %s </p>', $row['first_name'], $row['last_name'], $row['salary'], $row['dept_name'], $row['title']);
}

?>

</body>
</html>