<?php
declare(strict_types=1);

/**
 * Проверяет сложность пароля.
 * 
 * @param string $password Проверяемый пароль
 * @return bool Возвращает true, если пароль соответствует требованиям
 */
function isStrongPassword(string $password): bool
{
    if (mb_strlen($password) < 8) {
        return false;
    }
    if (!preg_match('/[A-Z]/', $password)) {
        return false;
    }
    if (!preg_match('/[a-z]/', $password)) {
        return false;
    }
    if (!preg_match('/[0-9]/', $password)) {
        return false;
    }
    return true;
}

$login = ' User ';
$password = 'megaP@ssw0rd';
$name = 'иван';
$email = 'ivan@petrov.ru';
$code = '<?=$login?>';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Использование функций обработки строк</title>
</head>
<body>
<?php
$login = mb_strtolower(trim($login));
echo "<p>Логин: " . htmlspecialchars($login) . "</p>";

if (isStrongPassword($password)) {
    echo "<p>Пароль надежный.</p>";
} else {
    echo "<p>Пароль ненадежный.</p>";
}

$name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
echo "<p>Имя: " . htmlspecialchars($name) . "</p>";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Email корректный.</p>";
} else {
    echo "<p>Email некорректный.</p>";
}

echo "<p>Код: " . htmlspecialchars($code) . "</p>";
?>
</body>
</html>
