<?php

require_once("dbconnection.php");
$result=mysqli_query($connect,"SELECT * FROM marks");



?>
<!DOCTYPE html>
<html>
<head>
	<title>Read Data</title>
	<link rel="stylesheet" type="text/css" href="view.css">
</head>
<body>
	<h2><a href="stude.php">Add_Student</a></h2>
	<?php

if (mysqli_num_rows($result)>0) {

?>
<table>
	<tr>
		<th>Name</th>
		<th>Admno</th>
		<th>Class</th>
		<th>Stream</th>
		<th>English</th>
		<th>Mathematics</th>
		<th>Kiswahili</th>
		<th>Chemistry</th>
		<th>Biology</th>
		<th>Physics</th>
		<th>History</th>
		<th>Geography</th>
		<th>Business</th>
		<th>Agriculture</th>
		<th>Computer</th>
		<th>Home_sci</th>


	</tr>

<?php

$i=0;
while ($row=mysqli_fetch_array($result)) {

	# code...



?>
<tr>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['AdmNo'];?></td>
	<td><?php echo $row['Class'];?></td>
	<td><?php echo $row['Stream'];?></td>
	<td><?php echo $row['English'];?></td>
	<td><?php echo $row['Mathematics'];?></td>
	<td><?php echo $row['Kiswahili'];?></td>
	<td><?php echo $row['chemistry'];?></td>
	<td><?php echo $row['Biology'];?></td>
	<td><?php echo $row['Physics'];?></td>
	<td><?php echo $row['History'];?></td>
	<td><?php echo $row['Geography'];?></td>
	<td><?php echo $row['Business'];?></td>
	<td><?php echo $row['Agriculture'];?></td>
	<td><?php echo $row['Computer'];?></td>
	<td><?php echo $row['Home_sci'];?></td>
	
</tr>

<?php
$i++;
}
?>


</tr>

</table>
<?php
}
else{
	echo "No results found";
}
?>


</body>
</html>