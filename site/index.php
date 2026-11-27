<?php
declare(strict_types=1);
require_once 'header.php';
?>
<main>
    <h2>Главная страница</h2>
    <p>Этот сайт создан в рамках лабораторной работы №3.</p>
    <p>Сегодня: <?= date('d.m.Y H:i:s') ?></p>
</main>
<?php require_once 'footer.php'; ?>
