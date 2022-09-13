<?php
	require_once('connection.php');
	$table='student';
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		$DB->insert($table,$_POST);
		header('location:insert1.php?msg');
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
	<div class="container pt-5">
		<div class="row">
			<div class="col-6">
				
			</div>
			<div class="col-6">
				<?php
					if (isset($_GET['msg'])) {
						echo "<div class='bg-light border form-control'>New record successfuly inserted.</div>";
					}
					?>
					<br>
				<div class="container p-md-5 bg-light border">

					<form action="insert1.php" method="POST">
						<div><h3 class="text-center">Student</h3></div><br>
						<div class="row">
							<div class="col">
							<input class="form-control" type="text" name="name" id="name" required placeholder="Enter your name...">
							</div>
						</div><br>
						<div class="row">
							<div class="col">
							<input class="form-control" type="text" name="lname" id="name" required placeholder="Enter your lastname...">
							</div>
						</div><br>
						<div class="row">
							<div class="col">
							<input class="form-control" type="text" name="contact" id="contact" minlength="10" maxlength="10" required placeholder="Enter your number...">
							</div>
						</div><br>
						<div class="row">
							<div class="col-6">
							<input type="submit" name="submit" id="submit" class="btn btn-primary" value="submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	<script>
		window.onload = function() {
			history.replaceState("", "", "insert1.php");
		}
	</script>
</body>
</html>