<?php
declare(strict_types=1);
$cols = 10;
$rows = 10;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Таблица умножения</title>
	<style>
		table { border: 2px solid black; border-collapse: collapse; }
		th, td { padding: 10px; border: 1px solid black; text-align: center; }
		th { background-color: yellow; }
	</style>
</head>
<body>
	<h1>Таблица умножения</h1>
	<?php
	echo "<table>";
	for ($i = 1; $i <= $rows; $i++) {
		echo "<tr>";
		for ($j = 1; $j <= $cols; $j++) {
			$value = $i * $j;
			if ($i === 1 || $j === 1) {
				echo "<th>$value</th>";
			} else {
				echo "<td>$value</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	?> 
</body>
</html>
