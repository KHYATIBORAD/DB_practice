<?php  

	require_once('connection.php');

	$table='tbl';
	$where['id '] = '28';

	$DB->delete($table,$where,$debug=true);
?>