<?php
declare(strict_types=1);
require_once __DIR__ . '/inc/lib.inc.php';
require_once __DIR__ . '/inc/data.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Таблица умножения</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once __DIR__ . '/inc/top.inc.php'; ?>
  <section>
    <h1>Таблица умножения</h1>
    <?php echo getTable($tableCols, $tableRows, $tableColor); ?>
  </section>
  <?php require_once __DIR__ . '/inc/menu.inc.php'; ?>
  <?php require_once __DIR__ . '/inc/bottom.inc.php'; ?>
</body>
</html>
