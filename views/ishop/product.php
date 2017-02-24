<?php defined('ISHOP') or die('Access denied'); ?>

<?php if($goods): // если есть запрошенный товар ?>
   
<div class="kroshka">
	<a href="#">Накладки</a> / <a href="#">LG</a> / <span>Шипи</span>
</div> <!-- .kroshka -->

<div class="catalog-detail">
<h1><?=$goods['name']?></h1>

<?php if($goods['img_slide']): // если есть картинки галереи ?>
<div class="item_gallery">
   <div class="item_img">
       <img src="" />
   </div> <!-- .item_img -->
   <div class="item_thumbs">
   <?php foreach($goods['img_slide'] as $item): ?>
       <a href="<?=PRODUCTIMG?>product_img/photos/<?=$item?>"><img src="<?=PRODUCTIMG?>product_img/thumbs/<?=$item?>" /></a>
   <?php endforeach; ?>
   </div> <!-- .item_thumbs -->
</div> <!-- .item_gallery -->
<?php endif; ?>

<img src="<?=PRODUCTIMG?><?=$goods['img']?>" style="float: left;" />

<div class="short-opais">
    <?=$goods['anons']?>
    <p class="price-detail">Цена :  <span><?=$goods['price']?></span></p>
    <a href="?view=addtocart&amp;goods_id=<?=$goods['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-detail.jpg" alt="Добавить в корзину" /></a>
</div> <!-- .short-opais -->

<div class="clr"></div>

<div class="long-opais">
<?=$goods['content']?>				
</div> <!-- .long-opais -->
   
</div> <!-- .catalog-detail -->

<?php else: ?>
    <div class="error">Такого товаруа немає</div>
<?php endif; ?>