<?php
declare(strict_types=1);

// Подключаем данные
require_once __DIR__ . '/data.inc.php';
?>

<main class="content">
    <h2>Добро пожаловать!</h2>
    <p>Этот сайт создан в рамках выполнения лабораторных работ по PHP.</p>
    
    <h3>Информация о студенте:</h3>
    <ul>
        <li><strong>Имя:</strong> <?= $studentData['name'] ?></li>
        <li><strong>Группа:</strong> <?= $studentData['group'] ?></li>
        <li><strong>Текущая работа:</strong> <?= $studentData['lab'] ?></li>
    </ul>

    <p>Сегодняшняя дата: <strong><?= date('d.m.Y') ?></strong></p>
</main>
