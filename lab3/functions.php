<?php
declare(strict_types=1);

/**
 * Выводит для каждого загруженного модуля имена всех его функций 
 * и общее количество функций в конце.
 * 
 * @return void
 */
function printLoadedExtensionsFunctions(): void
{
    $extensions = get_loaded_extensions();
    $totalFunctions = 0;

    foreach ($extensions as $extension) {
        $functions = get_extension_funcs($extension);
        if ($functions === false) {
            continue;
        }
        echo "<h3>Модуль: " . htmlspecialchars($extension) . " (" . count($functions) . " функций)</h3>";
        echo "<ul>";
        foreach ($functions as $function) {
            echo "<li>" . htmlspecialchars($function) . "</li>";
            $totalFunctions++;
        }
        echo "</ul>";
    }
    echo "<h2>Общее количество функций: " . $totalFunctions . "</h2>";
}

printLoadedExtensionsFunctions();
?>
