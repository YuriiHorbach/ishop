<?php defined('ISHOP') or die('Access denied'); ?>

<div class="kroshka">
	<a href="#">Главная</a> / <a href="#">Способы оплаты</a> / <span>Наличный расчёт</span>
</div>

<div class="content-txt">
    <?php if($text_informer): ?>
        <h1><?=$text_informer['link_name']?></h1>
        <?=$text_informer['text']?>
    <?php else: ?>
        <p>Такої сторінки немає!</p>
    <?php endif; ?>
</div> <!-- .content-txt -->