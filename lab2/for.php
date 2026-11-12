<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Цикл for</title>
</head>
<body>
	<h1>Цикл for</h1>
	<?php
	// Используя цикл for выведите в столбик Нечётные числа от 1 до 50
	for ($i = 1; $i <= 50; $i += 2) {
		echo $i . "<br>";
	}
	?> 
</body>
</html>
