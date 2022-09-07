<?php  

	require_once('connection.php');
	if(isset($_GET['deleteid'])){
		$table='tbl';
		$where ['id']=$_GET['deleteid'];
		if($DB->delete($table,$where)){
			header('location:selectvalue.php');
		}
	}
?>