<?php
declare(strict_types=1);

$now = time();
$currentYear = date('Y', $now);
$birthday = mktime(0, 0, 0, 2, 16, (int)$currentYear); 

if ($birthday < $now) {
    $birthday = mktime(0, 0, 0, 2, 16, (int)$currentYear + 1);
}

$dateInfo = getdate($now);
$hour = $dateInfo['hours'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Использование функций даты и времени</title>
</head>
<body>
    <h1>Использование функций даты и времени</h1>
    <?php
    if ($hour >= 0 && $hour < 6) {
        $welcome = 'Доброй ночи';
    } elseif ($hour >= 6 && $hour < 12) {
        $welcome = 'Доброе утро';
    } elseif ($hour >= 12 && $hour < 18) {
        $welcome = 'Добрый день';
    } elseif ($hour >= 18 && $hour < 23) {
        $welcome = 'Добрый вечер';
    } else {
        $welcome = 'Доброй ночи';
    }
    
    echo "<p>" . $welcome . "</p>";

    setlocale(LC_ALL, 'ru_RU.UTF-8');
    
    if (class_exists('IntlDateFormatter')) {
        $formatter = new IntlDateFormatter(
            'ru_RU', 
            IntlDateFormatter::LONG, 
            IntlDateFormatter::MEDIUM
        );
        $formatter->setPattern("'Сегодня' d MMMM y 'года, 'EEEE HH:mm:ss");
        echo "<p>" . $formatter->format($now) . "</p>";
    } else {
        echo "<p>Сегодня " . date('j F Y года, l H:i:s') . "</p>";
    }

    $diff = $birthday - $now;
    
    $days = floor($diff / (60 * 60 * 24));
    $hours = floor(($diff % (60 * 60 * 24)) / (60 * 60));
    $minutes = floor(($diff % (60 * 60)) / 60);
    $seconds = $diff % 60;

    echo "<p>До моего дня рождения осталось: </p>";
    echo "<p>{$days} дней, {$hours} часов, {$minutes} минут, {$seconds} секунд.</p>";
    ?>
</body>
</html>
