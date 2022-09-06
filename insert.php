<?php

require_once('connection.php');
if(isset($_POST['submit'])){
	$table='tbl';
	$DB->insert($table,$_POST);	
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
<body class="bg-light">
	<nav class="navbar">
		<div class="container-fluid">
			<a class="navbar-brand" href="selectvalue">View</a>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<form action="#" method="POST>
					<div class="container-fluid p-5">
						<div class="p-5 border bg-light">
							<h1 class="text-center">Form</h1>
							<div class="row">
								<div class="col-lg-12">
									<label class="form-lable">name</label>
									<input type="text" name="name" id="name" class="form-control" autocomplete="off" required>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label class="form-lable">surname</label>
									<input type="text" name="surname" id="surname" class="form-control" autocomplete="off" required>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label class="form-lable">city</label>
									<input type="text" name="city" id="city" class="form-control" autocomplete="off" required>
								</div>
							</div><br>
							<div class="row">
								<div class="col-6">
									<button name="submit" class="btn btn-primary" value="submit">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>