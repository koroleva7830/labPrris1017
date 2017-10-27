<?php
//$roof = array(1, 4, 2, 7, 5, 7, 1, 4, 9); //требуемый набор цифр
for ($i = 0; $i < 9; $i++)	{$roof[] = rand(1, 9);} // случайный набор цифр
$roofLess = $roof;
array_shift($roofLess);
array_pop($roofLess);
$kol = count($roof);
for ($i = 0; $i < $kol; $i++)
{
print "$roof[$i] ";
}
$left = 0; //первый  элемент крыши
$right = $kol - 1; // последний элемент крыши
$max = max($roofLess);
if ($roof[$left] > $max)
{
	$leftmax = $max;
}
else {
	$leftmax = $roof[$left];
}
if ($roof[$right] > $max)
{
	$rightmax = $max;
}
else {
	$rightmax = $roof[$right];
}
$size = 0;
while ($leftmax < $max) {
	$left++;
	if ($leftmax < $roof[$left]) {
		$leftmax = $roof[$left];
	}
	else {
		$size += $leftmax - $roof[$left];
	}
}
while ($rightmax < $max)
{
	$right--;
	if ($rightmax < $roof[$right])
	{
		$rightmax = $roof[$right];
	}
	else
	{
		$size += $rightmax - $roof[$right];
	}
}

while ($left != $right)
{
	$size += $leftmax - $roof[$left];
	$left++;
}
print "<br>Объем воды в крыше = $size";