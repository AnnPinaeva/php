<?php
declare(strict_types=1);

/**
 * Анонимная функция для обмена значений переменных, переданных по ссылке.
 *
 * @param mixed $a Первая переменная.
 * @param mixed $b Вторая переменная.
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
 * Применяет коллбэк к каждому элементу массива и возвращает изменённый массив.
 *
 * @param array $arr Исходный массив.
 * @param callable $callback Функция обратного вызова.
 * @return array Изменённый массив.
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Работа с функциями</title>
</head>
<body>
	<h1>Работа с функциями</h1>
	
	<h2>Функция swap</h2>
	<?php
	echo "<p>Изначально: a = 5, b = 8</p>";
	echo "<p>После swap: a = {$a}, b = {$b}</p>";
	?>
	
	<h2>Функция map</h2>
	<?php
	echo "<p>Исходный массив: " . implode(', ', $numbers) . "</p>";
	echo "<p>Массив в квадрате: " . implode(', ', $squared) . "</p>";
	?>
</body>
</html>
