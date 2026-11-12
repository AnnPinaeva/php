<?php
declare(strict_types=1);

/**
 * @param int $cols
 * @param int $rows
 * @param string $color
 * @return int
 */
function getTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): int
{
	static $count = 0;
	$count++;

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
	<title>Таблица умножения</title>
	<style>
		table { border: 2px solid black; border-collapse: collapse; }
		th, td { padding: 10px; border: 1px solid black; text-align: center; }
	</style>
</head>
<body>
	<h1>Таблица умножения</h1>
	<?php
	getTable(5, 6, 'red');
	getTable();
	getTable(8);
	$total = getTable(5, 5);
	
	echo "<p>Таблица была отрисована $total раз</p>";
	?> 
</body>
</html>
