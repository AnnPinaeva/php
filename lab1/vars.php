<?php
/*
ЗАДАНИЕ 1
*/
$name = 'Анна';
$age = 19;      
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Переменные и вывод</title>
</head>
<body>
	<h1>Переменные и вывод</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	*/
	?>
	<p>Меня зовут: <?= $name ?></p>
	<p>Мне <?= $age ?> лет</p>
	<p>Тип переменной $name: <?= gettype($name) ?></p>
	<p>Тип переменной $age: <?= gettype($age) ?></p>
	<?php unset($name, $age); ?>
</body>
</html>
