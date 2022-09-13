<?php
$index2 = array (
		'How to Eat Apples',
		'Surfing Safely in a Wave Pool',
		'The Best Foods For Breakfast',
		'How to Eat Apples',
		'25 tips to blogging nirvana',
		'The Best Egg Nogg Recipe for the Holidays',
		'Arrays with Style',
		'PHP in the Enterprise',
		'Douglas Crockford declares PHP his favorite language' 
);
$found = array_search ( 'PHP in the Enterprise', $index2 );  //  (needle,haystack)
print_r ( $found ); // 7
?>  