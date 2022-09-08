<?php 
	require_once('connection.php');
	$table='tbl';
	$field='*';
	//$where['id']='30';
	$DB->selectValue($table,$field);
	echo "<br><a href='insert.php' class='btn btn-danger'>ADD</a>";
	$sql='SELECT * FROM tbl';
	$styleTable='border: 1px black; text-align: center; margin:10;';
	echo $DB->getHTML($sql, '', '',$styleTable);
?>