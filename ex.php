<!-- $html .= "\t\t<td><a href='#'>Edit<a></td>";
$html .= "\t\t<td><a href='#'>Delete<a></td>"; -->

<?php
$array = array (
		'websites' => array (
				'Search' => 'Google',
				'Social' => 'Facebook',
				'News' => 'NY Times' 
		),
		'friends' => array (
				'Chris',
				'Jim',
				'Lynn',
				'Jeff',
				'Joanna' 
		) 
);
 
$merged = array_merge ( $array ['websites'], $array ['friends'] );

$merged = array_values( $merged ); //get the values
 
print_r ( $merged );
?>