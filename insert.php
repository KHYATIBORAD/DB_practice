<?php

require_once('connection.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$city=$_POST['city'];
	$table='tbl';	
	$values=array(
		'name'=>$name,
		'surname'=>$surname,
		'city'=>$city,
	);
	$DB->insert($table,$values,$debug=false);	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">

		</div>
	</nav>
	<div class="container">
		
		<form action="#" method="post" class="p-5">
			<div class="row">
				<div class="col-lg-6">
					<label>Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<label>Surname</label>
					<input type="text" name="surname" id="surname" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<label>City</label>
					<input type="text" name="city" id="city" class="form-control">
				</div>
			</div><br>
			<div class="row">
				<div class="col-6">
					<input type="submit" name="submit" value="submit" id="submit" class="btn btn-primary">
				</div>
			</div>

		</form>
	</div>
	<?php 
		echo $DB->getHTML("SELECT * FROM tbl");
	?>
</body>
</html>
