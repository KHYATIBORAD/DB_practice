<?php 
	require_once('connection.php');
	$table='tbl';
	$field='*';
	$where['id']='30';
	$DB->selectValue($table,$field,$where,$debug=false);

	$sql='SELECT * FROM tbl';
	echo $DB->getHTML($sql, '', '',);
?>


