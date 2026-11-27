<?php
declare(strict_types=1);

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
$login = strtolower(trim($login));
echo "Обработанный логин: " . $login . "<br>";

/**
 * Проверяет сложность пароля.
 * 
 * @param string $pass Пароль для проверки.
 * @return bool Возвращает true, если пароль надежный, иначе false.
 */
function isPasswordStrong(string $pass): bool {
    if (strlen($pass) < 8) {
        return false;
    }
    if (!preg_match('/[A-Z]/', $pass)) {
        return false;
    }
    if (!preg_match('/[a-z]/', $pass)) {
        return false;
    }
    if (!preg_match('/[0-9]/', $pass)) {
        return false;
    }
    return true;
}

if (isPasswordStrong($password)) {
    echo "Пароль '{$password}' надежный.<br>";
} else {
    echo "Пароль '{$password}' НЕ надежный.<br>";
}

$name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
echo "Имя: " . $name . "<br>";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email '{$email}' корректен.<br>";
} else {
    echo "Email '{$email}' некорректен.<br>";
}

echo "Код: " . htmlspecialchars($code) . "<br>";
?>
</body>
</html>
