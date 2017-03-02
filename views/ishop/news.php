<?php defined('ISHOP') or die('Access denied'); ?>

<div class="kroshka">
	<a href="#">Главная</a> / <a href="#">Способы оплаты</a> / <span>Наличный расчёт</span>
</div>

<div class="content-txt">
    <?php if($news_text): ?>
        <h1><?=$news_text['title']?></h1>
        <span class="news_date"><?=$news_text['date']?></span>
        <br /><br />
        <?=$news_text['text']?>
    <?php else: ?>
        <p>Такої новини немає</p>
    <?php endif; ?>
</div> <!-- .content-txt -->