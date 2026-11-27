<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Функции модулей</title>
    <style>
        h2 { color: #333; margin-top: 20px; }
        ul { list-style-type: square; }
    </style>
</head>
<body>
    <h1>Функции по модулям</h1>
    <?php
    $extensions = get_loaded_extensions();
    $totalCount = 0;

    foreach ($extensions as $ext) {
        $funcs = get_extension_funcs($ext);
        
        if ($funcs) {
            echo "<h2>Модуль: " . htmlspecialchars($ext) . "</h2>";
            echo "<ul>";
            foreach ($funcs as $func) {
                echo "<li>" . htmlspecialchars($func) . "</li>";
                $totalCount++;
            }
            echo "</ul>";
        }
    }

    echo "<hr>";
    echo "<h3>Общее количество функций: " . $totalCount . "</h3>";
    ?>
</body>
</html>
