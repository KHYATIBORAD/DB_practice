<?php
	require_once("connection.php");
	if(isset($_POST['updateid'])){
		$table='tbl';
		$where['id']=$_POST['updateid'];
		$DB->update($table,$_POST,$where);
	}   
?>