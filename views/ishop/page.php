<?php defined('ISHOP') or die('Access denied'); ?>

<div class="kroshka">
	<a href="<?=PATH?>">Головна</a> / <span><?=$get_page['title']?></span>
</div>

<div class="content-txt">
    <?php if($get_page): ?>
        <h1><?=$get_page['title']?></h1>
        <?=$get_page['text']?>
    <?php else: ?>
        <p>Такої сторінки немає!</p>
    <?php endif; ?>
</div> <!-- .content-txt -->