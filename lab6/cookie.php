<?php
declare(strict_types=1);

/**
 * Получает количество посещений из куки.
 * @return int
 */
function getVisitsCount(): int {
    return isset($_COOKIE['visits']) ? (int)$_COOKIE['visits'] : 0;
}

/**
 * Получает дату последнего посещения из куки.
 * @return string
 */
function getLastVisitDate(): string {
    return isset($_COOKIE['last_visit']) ? htmlspecialchars(trim($_COOKIE['last_visit']), ENT_QUOTES, 'UTF-8') : '';
}

$visits = getVisitsCount();
$lastVisit = getLastVisitDate();
$visits++;
$currentDate = date('d-m-Y H:i:s');

setcookie('visits', (string)$visits, time() + 86400, '/');
setcookie('last_visit', $currentDate, time() + 86400, '/');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Последний визит</title>
</head>
<body>
<h1>Последний визит</h1>
<?php
if ($visits === 1) {
    echo "<p>Добро пожаловать!</p>";
} else {
    echo "<p>Вы зашли на страницу " . $visits . " раз</p>";
    if ($lastVisit !== '') {
        echo "<p>Последнее посещение: " . $lastVisit . "</p>";
    }
}
?>
</body>
</html>
