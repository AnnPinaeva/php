<?php
declare(strict_types=1);

/**
 * @param mixed $a
 * @param mixed $b
 * @return void
 */
$swap = function (&$a, &$b): void {
	$temp = $a;
	$a = $b;
	$b = $temp;
};

$a = 5;
$b = 8;
$swap($a, $b);

/**
 * @param array $arr
 * @param callable $callback
 * @return array
 */
function map(array $arr, callable $callback): array
{
	$result = [];
	foreach ($arr as $item) {
		$result[] = $callback($item);
	}
	return $result;
}

$numbers = [1, 2, 3, 4, 5];
$squared = map($numbers, fn($n) => $n * $n);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Работа с функциями</title>
</head>
<body>
	<h1>Работа с функциями</h1>
	<h2>Функция swap</h2>
	<p>Изначально: a = 5, b = 8</p>
	<p>После swap: a = <?= $a ?>, b = <?= $b ?></p>
	
	<h2>Функция map</h2>
	<p>Исходный массив: <?= implode(', ', $numbers) ?></p>
	<p>Массив в квадрате: <?= implode(', ', $squared) ?></p>
</body>
</html>
