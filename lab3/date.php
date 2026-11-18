<?php
declare(strict_types=1);

$now = time();
$birthdayMonth = 5; 
$birthdayDay = 15;
$birthday = mktime(0, 0, 0, $birthdayMonth, $birthdayDay, (int)date('Y', $now)); 

$dateInfo = getdate($now);
$hour = $dateInfo['hours'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
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
    echo "<p>$welcome</p>";

    setlocale(LC_TIME, 'ru_RU.UTF-8', 'ru_RU.utf8', 'rus_rus');

    $formatter = new IntlDateFormatter(
        'ru_RU',
        IntlDateFormatter::LONG,
        IntlDateFormatter::MEDIUM,
        'Europe/Moscow',
        IntlDateFormatter::GREGORIAN,
        "d MMMM y 'года', EEEE HH:mm:ss"
    );
    echo "<p>Сегодня " . $formatter->format($now) . "</p>";

    $currentYear = (int)date('Y', $now);
    $birthdayThisYear = mktime(0, 0, 0, $birthdayMonth, $birthdayDay, $currentYear);

    if ($birthdayThisYear < $now) {
        $birthdayThisYear = mktime(0, 0, 0, $birthdayMonth, $birthdayDay, $currentYear + 1);
    }

    $diff = $birthdayThisYear - $now;
    $days = floor($diff / (60 * 60 * 24));
    $hours = floor(($diff % (60 * 60 * 24)) / (60 * 60));
    $minutes = floor(($diff % (60 * 60)) / 60);
    $seconds = $diff % 60;

    echo "<p>До моего дня рождения осталось: $days дней, $hours часов, $minutes минут, $seconds секунд</p>";
    ?>
</body>
</html>
