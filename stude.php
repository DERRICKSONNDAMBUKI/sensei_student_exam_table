<!DOCTYPE html>

<html>
<head>
	<title>student report</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	
.al{
    
    text-decoration: none;
    margin-left: 500px;
    background-color: green;
    color: white;
    padding: 8px 14px 8px 14px;
}.al:hover{
    background-color: red;
    color: white;
    cursor: pointer;
}
.rq{
	margin-top: 40px;
}
#submit{
	margin-left: 520px;
}
@media screen and (max-width: 600px){
	.rq{
		margin-left: -500px;
		margin-top: 500px;

	}
	#submit{
		margin-top: 50px;
	}
}
</style>
<body>
	<h1>STUDENT'S REPORT</h1>
	<div class="form">
	<form action="insmark.php" method="POST" autocomplete="off">
		<label for="name">NAME</label><br>
		<input type="text" name="name" required=""></br>
		<label for="adminno">ADM NO</label><br>
		<input type="number" name="adminno" required=""></br>

		<div class="ps">
		<label for="class">CLASS</label><br>
		<input type="number" name="class" required="" max="4" min="1"></br>
		<label for="stream">STREAM</label><br>
		<input type="text" name="stream" required=""></br>
	</div>
		<h2>MARKS ATTTAINED</h2><br>


	<div class="lang">
		<label>English</label><br>
		<input type="number" name="eng" required="" max="100"><br>

		<label>Mathematics</label><br>
		<input type="number" name="math" required="" max="100"><br>

		<label>Kiswahili</label><br>
		<input type="number" name="kis" required="" max="100"><br>
	</div>
	<div class="sci">

		<label>Chemistry</label><br>
		<input type="number" name="chem" required="" max="100"><br>

		<label>Biology</label><br>
		<input type="number" name="bio" required="" max="100"><br>

		<label>Physics</label><br>
		<input type="number" name="phy" required="" max="100"><br>
	</div>
	<div class="hum">

		<label>History</label><br>
		<input type="number" name="hist" required="" max="100"><br>

		<label>Geography</label><br>
		<input type="number" name="geo" required="" max="100"><br>

		<label>CRE</label><br>
		<input type="number" name="cre" required="" max="100"><br>
	</div>
	<div class="aplsci">
		<label>Business Studies</label><br>
		<input type="number" name="bst" required="" max="100"><br>

		<label>Agriculture</label><br>
		<input type="number" name="agr" required="" max="100"><br>

		<label>Computer Studies</label><br>
		<input type="number" name="cse" required="" max="100"><br>

		<label>Home Shcience</label><br>
		<input type="number" name="hsci" required="" max="100"><br>
		
	</div>
<div class="rq">
		<a class="al" href="view.php">View_Students</a><br>
		<input type="submit" id="submit" name="submit" value="Submit">
	</div>


	</form>
</div>

</body>
</html>