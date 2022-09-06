<?php 
	require_once('connection.php');
	$table='tbl';
	$values='*';
	$where['id']='30';
	$DB->select($table,$values,$where,$order=false,$debug=false);
	$sql="SELECT * from tbl";
	echo $DB->getHTML($sql);
?>
