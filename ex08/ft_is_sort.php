#!/usr/bin/php
<?PHP
function ft_is_sort($str)
{
	$str1 = $str;
	sort($str1);
	return($str1 == $str);
}
?>