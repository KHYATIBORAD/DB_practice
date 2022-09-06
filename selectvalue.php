<?php 
	require_once('connection.php');
	$table='tbl';
	$field='*';
	$where['id']='30';
	$DB->selectValue($table,$field,$where,$debug=false);

	$sql='SELECT * FROM tbl';
	$styleTable='border: 1px black; align:center;  padding: 15px; text-align: center;';
	echo $DB->getHTML($sql, '', '',$styleTable);
?>


