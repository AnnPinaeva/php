<?php
declare(strict_types=1);

// Массив с пунктами меню: ссылка => название
$menuItems = [
    '../index.php' => 'Главная',
    '../about.php' => 'О нас',
    '../contact.php' => 'Контакты',
    '../calc.php' => 'Калькулятор',
    '../table.php' => 'Таблица'
];
?>
<nav class="main-menu">
    <ul>
        <?php foreach ($menuItems as $link => $title): ?>
            <li><a href="<?= $link ?>"><?= $title ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
<hr>
