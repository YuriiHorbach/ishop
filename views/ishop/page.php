<?php defined('ISHOP') or die('Access denied'); ?>

<div class="kroshka">
	<a href="#">Главная</a> / <a href="#">Способы оплаты</a> / <span>Наличный расчёт</span>
</div>

<div class="content-txt">
    <?php if($get_page): ?>
        <h1><?=$get_page['title']?></h1>
        <?=$get_page['text']?>
    <?php else: ?>
        <p>Такой страницы нет!</p>
    <?php endif; ?>
</div> <!-- .content-txt -->