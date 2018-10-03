#!/usr/bin/php
<?PHP
$array = array_filter(explode(" ",$argv[1]));
foreach($array as $string)
{
	$array2 .= $string." ";
}
trim($array2);
print($array2."\n");
?>