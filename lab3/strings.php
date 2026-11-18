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
    if (mb_strlen($password) < 8) return false;
    if (!preg_match('/[A-Z]/', $password)) return false;
    if (!preg_match('/[a-z]/', $password)) return false;
    if (!preg_match('/[0-9]/', $password)) return false;
    return true;
}

$login = 'cat_lover';
$password = 'megaP@ssw0rd';
$name = 'аня';
$email = 'anya@example.ru';
$code = '<?=$login?>';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Использование функций обработки строк</title>
    <style>body { font-family: Arial; margin: 20px; } .result { margin: 10px 0; padding: 10px; background: #f4f4f4; }</style>
</head>
<body>
    <h2>Результаты обработки строк</h2>
    <?php
    $login = mb_strtolower(trim($login));
    echo "<div class='result'><strong>Логин:</strong> " . htmlspecialchars($login) . "</div>";

    if (isStrongPassword($password)) {
        echo "<div class='result'><strong>Пароль:</strong> надежный</div>";
    } else {
        echo "<div class='result'><strong>Пароль:</strong> ненадежный</div>";
    }

    $name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
    echo "<div class='result'><strong>Имя:</strong> " . htmlspecialchars($name) . "</div>";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='result'><strong>Email:</strong> корректный</div>";
    } else {
        echo "<div class='result'><strong>Email:</strong> некорректный</div>";
    }

    echo "<div class='result'><strong>Код:</strong> " . htmlspecialchars($code) . "</div>";
    ?>
    <br><a href="index.php">← Вернуться в меню 3-й лабы</a>
</body>
</html>
