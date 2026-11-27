<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Константы PHP</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 5px; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h1>Список всех определенных констант</h1>
    <table>
        <tr>
            <th>Имя константы</th>
            <th>Значение</th>
        </tr>
        <?php
        $constants = get_defined_constants(true);
        
        foreach ($constants as $category => $catConstants) {
            foreach ($catConstants as $name => $value) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($name) . "</td>";
                echo "<td>";
                if (is_array($value)) {
                    echo htmlspecialchars(print_r($value, true));
                } else {
                    echo htmlspecialchars((string)$value);
                }
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
