<?php
require_once('dbconnection.php');

if (isset($_POST['submit'])) {

	$name=$_POST['name'];

	$adminno=$_POST['adminno'];

	$class=$_POST['class'];

	$stream=$_POST['stream'];

	$eng=$_POST['eng'];

	$math=$_POST['math'];

	$kis=$_POST['kis'];

	$chem=$_POST['chem'];

	$bio=$_POST['bio'];

	$phy=$_POST['phy'];

	$hist=$_POST['hist'];

	$geo=$_POST['geo'];

	$cre=$_POST['cre'];

	$bst=$_POST['bst'];

	$agr=$_POST['agr'];

	$cse=$_POST['cse'];

	$hsci=$_POST['hsci'];


	$insert= "INSERT INTO marks(Name,AdmNo,Class,Stream,English,Mathematics,Kiswahili,chemistry,Biology,Physics,History,Geography,CRE,Business,Agriculture,Computer,Home_sci)
	VALUES('$name','$adminno','$class','$stream','$eng','$math','$kis','$chem','$bio','$phy','$hist','$geo','$cre','$bst','$agr','$cse','$hsci')";
	# code...
	if (mysqli_query($connect,$insert)) {

		echo '<script>window.alert("Student Record Inserted Successfully")</script>';
		# code...
	}
	else{
		echo "Failed to Save Data.";
	}
}







?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	h2,h3{
		text-align: center;
		margin-top: 40px;
		text-decoration: none;
	}
	a{
		text-decoration: none;
	background-color: green;
	padding: 8px 14px 8px 14px;
	color: white;
	}
	a:hover{
		background-color: red;
		color: white;
		cursor: pointer;
	}
</style>
<body>
	<h2><a href="stude.php">ADD ANOTHER SUDENT <br> RECORD</a></h2>

	<h3><a href="view.php">NO, THANKS</a></h3>

</body>
</html>