<?php

	require_once('connection.php');

	$table='tbl';
	$values=array(
		'name' => 'kridha',
		'surname' => 'borad'
	);
	$where['id'] = '30';

	$DB->update($table,$values,$where,$debug=true);   
?>