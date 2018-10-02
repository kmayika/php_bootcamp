#!/usr/bin/php
<?PHP

function count_numb($x, $number)
{
    return str_repeat($x, $number);
}
$x = "X";
$index = 0;
while ($index < 1000)
{
  $str = count_numb($x, 100);
  $index++;
}

echo $str;
?>