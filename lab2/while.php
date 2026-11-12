<?php
declare(strict_types=1);
/*
ЗАДАНИЕ
- Создайте переменную $var и присвойте ей строковое значение 'ПРИВЕТ'
- Используя цикл while выведите значение переменной $var в столбик так, 
  чтобы на выходе в браузере получилось:
П
Р
И
В
Е
Т
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Цикл while</title>
</head>
<body>
	<h1>Цикл while</h1>
	<?php
	$var = 'ПРИВЕТ';
	
	// Разбиваем строку на массив букв (чтобы не разрезать русские буквы пополам)
	$letters = mb_str_split($var);
	$i = 0;
	
	// Проходимся по массиву с помощью while
	while ($i < count($letters)) {
		echo $letters[$i] . "<br>";
		$i++;
	}
	?> 
</body>
</html>
