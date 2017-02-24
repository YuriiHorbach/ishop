<?php defined('ISHOP') or die('Access denied'); ?>
<div id="right-bar">
	<div class="right-bar-cont">
		<div class="enter">
			<h2>Авторизація</h2>
			<div class="authform">
                <?php if(!$_SESSION['auth']['user']): ?>
                <form method="post" action="#">
                    <label for="login">Логін: </label><br />
                    <input type="text" name="login" id="login" /><br />
                    <label for="pass">Пароль: </label><br />
                    <input type="password" name="pass" id="pass" /><br /><br />
                    <input type="submit" name="auth" id="auth" value="Вхід" />
                    <p class="link"><a href="?view=reg">Реєстрація</a></p>
                </form>
                <?php
                    if(isset($_SESSION['auth']['error'])){
                        echo '<div class="error">' .$_SESSION['auth']['error']. '</div>';
                        unset($_SESSION['auth']);
                    }
                ?>
                <?php else: ?>
                    <p>Раді вітати, <?=htmlspecialchars($_SESSION['auth']['user'])?></p>
                    <a href="?do=logout">Вихід</a>
                <?php endif; ?>
			</div> <!-- .authform -->	
		</div> <!-- .enter -->	
		<div class="basket">
			<h2>Кошик</h2>
			<div>
                <p>
                <?php if($_SESSION['total_quantity']): ?>
                    Товарів в кошику:<br />
                    <span><?=$_SESSION['total_quantity']?></span> на суму <span><?=$_SESSION['total_sum']?></span> грн.
                    <a href="?view=cart"><img src="<?=TEMPLATE?>images/oformit.jpg" alt="" /></a>
                    <?php else: ?>
                        Кошик порожній
                <?php endif; ?>
                </p>
			</div>
		</div> <!-- .basket -->
		<div class="share-search">
			<h2>Вибір по параметрах</h2>
			<div>
				<form method="get">
                <input type="hidden" name="view" value="filter" />
				<p>Вартість:</p>
				від <input class="podbor-price" type="text" name="startprice" value="<?=$startprice?>" />
				до <input class="podbor-price" type="text" name="endprice" value="<?=$endprice?>" />
				 грн.
				 <br /><br />
				<p>Виробники:</p>
                <?php foreach($cat as $key => $item): ?>
                    <?php if($item[0]): ?>
                    <input type="checkbox" name="brand[]" value="<?=$key?>" id="<?=$key?>" <?php if($key == $brand[$key]) echo "checked"?> />
                    <label for="<?=$key?>"><?=$item[0]?></label> <br />
                    <?php endif; ?>
                <?php endforeach; ?>
				
				<input class="podbor" type="image" src="<?=TEMPLATE?>images/podbor.jpg" />						
				</form>
			</div>
		</div>	
	</div>
</div>