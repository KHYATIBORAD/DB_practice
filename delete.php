<?php  

	require_once('connection.php');
	echo "<pre>";
	print_r ($_POST['deleteid']);
	echo "</pre>";
	exit();
	if(isset($_POST['deleteid'])){
		$table='tbl';
		$where ['id']=$_POST['deleteid'];
		$DB->delete($table,$where,true);
	}
?>