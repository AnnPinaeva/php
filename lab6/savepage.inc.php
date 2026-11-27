<?php
declare(strict_types=1);

/**
 * Сохраняет текущий URL в массив посещенных страниц в сессии.
 * @return void
 */
function saveCurrentPage(): void {
    $currentPage = $_SERVER['REQUEST_URI'];
    if (!isset($_SESSION['visited_pages'])) {
        $_SESSION['visited_pages'] = [];
    }
    $_SESSION['visited_pages'][] = $currentPage;
}

saveCurrentPage();
?>
