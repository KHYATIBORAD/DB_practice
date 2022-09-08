<?php 
	require_once('connection.php');
	$table='tbl';
	$values='*';
	$where['id']='30';
	$DB->selectRow($table,$values,$where);
?>