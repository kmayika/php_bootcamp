#!/usr/bin/php
<?PHP
echo "enter a number : ";
while ($line = fgets(STDIN))
{
	$line = trim($line);
	if (ctype_digit($line))
	{
		if ((int)$line % 2 == 0)
			echo "The number $line is odd\n";
		else
			echo "The number $line is even\n";
	}
	else
		echo "'$line' is not a number\n";
	echo "enter a number : ";
}
echo "^D\n"
?>