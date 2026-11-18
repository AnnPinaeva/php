<?php
declare(strict_types=1);

/**
 * Выводит имена и значения всех определенных в PHP констант.
 * 
 * @return void
 */
function printAllConstants(): void
{
    $constants = get_defined_constants(true);
    foreach ($constants as $category => $categoryConstants) {
        echo "<h3>Категория: " . htmlspecialchars($category) . "</h3>";
        echo "<ul>";
        foreach ($categoryConstants as $name => $value) {
            if (is_scalar($value) || is_null($value)) {
                echo "<li><strong>" . htmlspecialchars($name) . "</strong> = " . htmlspecialchars((string)$value) . "</li>";
            }
        }
        echo "</ul>";
    }
}

printAllConstants();
?>
