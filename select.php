<?php 
	require_once('connection.php');
	$table='tbl';
	$values='*';
	$where['id']=$_POST['id'];
	$DB->select($table,$values,$where);
	echo "<br><a href='insert.php' class='btn btn-danger'>ADD</a>";
	$sql='SELECT * FROM tbl';
	$styleTable='border: 1px black; text-align: center; margin:10;';
	echo $DB->getHTML($sql, '', '',$styleTable);
?>
