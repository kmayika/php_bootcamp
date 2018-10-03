#!/usr/bin/php
<?PHP
$array = array();
$array1 = array();

$i = 1;
while ($i < count($argv))
{
	array_push($array, array_values(array_filter(explode(" ", $argv[$i]))));
	$i++;
}

foreach($array as $valuuu=>$crab)
{
	foreach($crab as $value)
	{
		array_push($array1, $value);
	}
}
sort($array1);

foreach($array1 as $string)
{
	$str.= $string."\n";
}
print($str);
?>