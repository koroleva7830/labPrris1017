<?php
$n = 100000000000; //число
function format($n) {
    $n = (string) $n; //преобразуем число в строку
    $kolSimv = strlen($n); //кол-во символов
    $kolPart = ceil($kolSimv / 3) - 1 ; //кол-во частей по 3 цифры
	$kolFirst = $kolSimv % 3; // целочисленный остаток от деления на 3 
	If ($kolFirst == 0) {$kolFirst = 3;}
	$first = substr($n, 0, $kolFirst); // первая часть до запятой
	$svod = "";
	for ($i = 1; $i <= $kolPart; $i++)
	{
	$part = ",".substr($n, $kolSimv - (3 * $i), 3);
	$svod = $part.$svod;
	}
	$svod = $first.$svod;
	return $svod;
}
echo "исходное число $n<br>";
$n = format($n);
echo "число в новом формате $n";

