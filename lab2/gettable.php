<?php
declare(strict_types=1);
/*
ЗАДАНИЕ 1, 2, 4
*/
/**
 * Отрисовывает таблицу умножения.
 *
 * @param int $cols Количество столбцов.
 * @param int $rows Количество строк.
 * @param string $color Цвет первой строки и первого столбца.
 * @return int Количество вызовов функции.
 */
function getTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): int
{
	/*
	ЗАДАНИЕ 3
	*/
	static $count = 0;
	$count++;

	// Добавил div с отступом снизу, чтобы таблицы не слипались
	echo "<div style=\"margin-bottom: 20px;\">";
	echo "<table>";
	for ($i = 1; $i <= $rows; $i++) {
		echo "<tr>";
		for ($j = 1; $j <= $cols; $j++) {
			$value = $i * $j;
			if ($i === 1 || $j === 1) {
				echo "<th style=\"background-color: $color;\">$value</th>";
			} else {
				echo "<td>$value</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";

	return $count;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Таблица умножения</title>
	<style>
		table {
			border: 2px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding: 10px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h1>Таблица умножения</h1>
	<?php
	/*
	ЗАДАНИЕ 3
	- Отрисуйте таблицу умножения вызывая функцию getTable() с различными параметрами
	*/
	// 1-й вызов (красная 5х6)
	getTable(5, 6, 'red');

	/*
	ЗАДАНИЕ 5
	- Отрисуйте таблицу умножения вызывая функцию getTable() без параметров
	- Отрисуйте таблицу умножения вызывая функцию getTable() с одним параметром
	- Отрисуйте таблицу умножения вызывая функцию getTable() с двумя параметрами
	- Используя статическую переменную $count выведите общее число вызовов функции getTable()
	*/
	// 2-й вызов (без параметров - 10х10 желтая)
	getTable();

	// 3-й вызов (с одним параметром - 8 столбцов, 10 строк, желтая)
	getTable(8);

	// 4-й вызов (с двумя параметрами - 5 столбцов, 5 строк, желтая)
	// Сохраняем результат 4-го вызова в переменную $total
	$total = getTable(5, 5);
	
	echo "<p>Таблица была отрисована $total раз</p>";
	?> 
</body>
</html>
