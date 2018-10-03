#!/usr/bin/php
<?PHP
$array = preg_split("/\s+/", trim($argv[1]));
array_push($array, array_shift($array));
echo implode(" ", $array)."\n";
?>