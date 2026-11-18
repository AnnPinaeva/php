<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Использование функций даты и времени</title>
    <style>body { font-family: Arial; margin: 20px; } .result { margin: 10px 0; padding: 10px; background: #f4f4f4; }</style>
</head>
<body>
    <h2>Использование функций даты и времени</h2>
    <?php
    $now = time();
    $birthdayMonth = 2; // Февраль
    $birthdayDay = 16;  // 16 число
    $dateInfo = getdate($now);
    $hour = $dateInfo['hours'];

    if ($hour >= 0 && $hour < 6) $welcome = 'Доброй ночи';
    elseif ($hour >= 6 && $hour < 12) $welcome = 'Доброе утро';
    elseif ($hour >= 12 && $hour < 18) $welcome = 'Добрый день';
    elseif ($hour >= 18 && $hour < 23) $welcome = 'Добрый вечер';
    else $welcome = 'Доброй ночи';

    echo "<div class='result'><strong>Приветствие:</strong> $welcome</div>";

    $formatter = new IntlDateFormatter('ru_RU', IntlDateFormatter::LONG, IntlDateFormatter::MEDIUM, 'Europe/Moscow', IntlDateFormatter::GREGORIAN, "d MMMM y 'года', EEEE HH:mm:ss");
    echo "<div class='result'><strong>Сегодня:</strong> " . $formatter->format($now) . "</div>";

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

    echo "<div class='result'><strong>До ДР осталось:</strong> $days дней, $hours часов, $minutes минут, $seconds секунд</div>";
    ?>
    <br><a href="index.php">← Вернуться в меню 3-й лабы</a>
</body>
</html>
