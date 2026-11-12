<?php
declare(strict_types=1);

/**
 * Анонимная функция для обмена значений переменных.
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

$a = 5;
$b = 8;
$swap($a, $b);

$numbers = [1, 2, 3, 4, 5];
$squared = map($numbers, fn($n) => $n * $n);
