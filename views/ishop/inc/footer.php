<?php defined('ISHOP') or die('Access denied'); ?>
<div class="footer">
			<div class="flogo">
				<a href="/"><img src="<?=TEMPLATE?>images/footer-logo.png" alt="Интернет магазин інвентаря для настільного тенісу" /></a>
				<p>Сopyright © 2012</p>
			</div>	
			<div class="fphone">
<h2>Телефон:</h2>
<h1>1111111111111111111</h1>

<h2>Режим роботи:</h2>
<p>Будні дни: з 9:00 до 18:00<br /> 
Субота, Неділя - вихідні </p>			
			</div>
			<div class="fmenu">
				<p>Меню:</p>
				<ul>
					<li><a href="<?=PATH?>">Главная</a></li>
                    <?php if($pages): ?>
                        <?php foreach($pages as $item): ?>
                            <li><a href="?view=page&amp;page_id=<?=$item['page_id']?>"><?=$item['title']?></a></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
				</ul>	
			</div>
		</div>