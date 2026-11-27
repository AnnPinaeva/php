<?php
declare(strict_types=1);

/**
 * Выводит список всех посещенных страниц из сессии.
 * @return void
 */
function renderVisitedPages(): void {
    if (isset($_SESSION['visited_pages']) && is_array($_SESSION['visited_pages'])) {
        echo "<h2>Список посещённых страниц</h2>";
        echo "<ol>";
        foreach ($_SESSION['visited_pages'] as $page) {
            echo "<li>" . htmlspecialchars($page, ENT_QUOTES, 'UTF-8') . "</li>";
        }
        echo "</ol>";
    } else {
        echo "<p>Вы еще не посетили ни одной страницы.</p>";
    }
}

renderVisitedPages();
?>
