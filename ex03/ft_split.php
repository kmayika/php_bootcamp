#!/usr/bin/php
<?PHP
function ft_split($my_string)
{
	$my_arr = array_filter(explode(' ',$my_string));
	sort($my_arr);
	return $my_arr;
}

?>