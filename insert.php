<?php
require_once('connection.php');
$table='tbl';
if(isset($_POST['submit'])){
	unset($_POST['submit']);
	$DB->insert($table,$_POST);
	$_POST = array();
	header('location:insert.php?msg');
}	
if(isset($_POST['update'])){
	unset($_POST['update']);
	$table='tbl';
	$where['id']=$_POST['hid'];
	if(isset($_POST['hid'])){
		unset($_POST['hid']);
	}
	$DB->update($table,$_POST,$where);
	header('location:selectvalue.php');
}	
if(isset($_GET['msg'])){
	//$last_insert_id=$DB->getLastInsertId();
	echo "<div class='alert alert-dark' role='alert'>
	New record created successfully.
	</div>";
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
	<nav class="navbar">
		<div class="container-fluid">
			<a class="navbar-brand" href="selectvalue.php">View</a>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<?php 
				if(isset($_GET['updateid'])){
					$value='*';
					$where ['id']=$_GET['updateid'];
					$myrecord=$DB->selectRow($table,$value,$where);
					?>
					<form action="insert.php" method="post">
						<div class="container-fluid p-5">
							<div class="p-5 border bg-light">
								<h1 class="text-center">Form</h1>
								<div class="row">
									<div class="col-lg-12">
										<label class="form-lable" for="name">name</label>
										<input type="text" name="name" id="name" value="<?php echo $myrecord->name; ?>" class="form-control" autocomplete="off" required>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<label class="form-lable" for="surname">surname</label>
										<input type="text" name="surname" id="surname" class="form-control" value="<?php echo $myrecord->surname; ?>" autocomplete="off" required>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<label class="form-lable" for="city">city</label>
										<input type="text" name="city" id="city" class="form-control" autocomplete="off" value="<?php echo $myrecord->city; ?>" required>
									</div>
								</div><br>
								<div class="row">
									<div class="col-6">
										<input type="hidden" name="hid" value="<?php echo $myrecord->id; ?>">
										<input type="submit" name="update" id="update" value="update" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</form>
					<?php 
				}
				else{
					?>
					<form action="insert.php" method="post">
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
										<input type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</form>
					<?php 
				}
				?>
			</div>
		</div>
	</div>
	<script>
		window.onload = function() {
			history.replaceState("", "", "insert.php");
		}
	</script>
</body>
</html>