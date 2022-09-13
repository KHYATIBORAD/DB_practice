<?php 
	require_once('connection.php');
	$table='student';
	$values='*';
	// $DB->select($table);	
	$sql="SELECT * FROM student";
	echo $DB->getHTML($sql);
?>