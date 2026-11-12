<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Цикл while</title>
</head>
<body>
	<h1>Цикл while</h1>
	<?php
	$var = 'ПРИВЕТ';
	$letters = mb_str_split($var);
	$i = 0;
	
	while ($i < count($letters)) {
		echo $letters[$i] . "<br>";
		$i++;
	}
	?> 
</body>
</html>
