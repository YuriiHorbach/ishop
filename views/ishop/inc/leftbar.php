<?php defined('ISHOP') or die('Access denied'); ?>
<div id="left-bar">
			<div class="left-bar-cont">
				<h2>Каталог</h2>
				<h3 class="nav-new"><a href="?view=new">Новинки</a></h3>
				<h3 class="nav-lider"><a href="?view=hits">Лідери продажу</a></h3>
				<h3 class="nav-sale"><a href="?view=sale">Розпродаж</a></h3>
                <!-- Меню категорий -->
				<h4>- Товари </h4>
				<ul class="nav-catalog" id="accordion">
                    <?php foreach($cat as $key => $item): ?>
                        <?php if(count($item) > 1): // якщо батьківська категорія ?>
                        <h3><li><a href="#"><?=$item[0]?></a></li></h3>
                            <ul>
                                <li>- <a href="?view=cat&amp;category=<?=$key?>">Всі товари</a></li>
                                <?php foreach($item['sub'] as $key => $sub): ?>
                                <li>- <a href="?view=cat&amp;category=<?=$key?>"><?=$sub?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php elseif($item[0]): // якщо самостійна категорія ?>
                            <li><a href="?view=cat&amp;category=<?=$key?>"><?=$item[0]?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
				</ul>
                <!-- Меню категорий -->
				<div class="bar-contact">
					<h3>Контакти:</h3>
					<p><strong>Телефон:</strong><br />
					<span>000000000000000</span></p>
					
					<p><strong>Режим роботи:</strong><br />
					Будні дні: <br />
					с 9:00 до 18:00<br />
					Субота, Неділя:<br />
					вихідні</p>
				</div>
				<div class="news">
					<h3>Новини</h3>
					<p>
						<span>24.03.2012</span>
					<a href="#">Надійшли в продаж нові накладки</a>	
					</p>
					<p>
						<span>24.03.2012</span>
					<a href="#">Подарунки всім, всім хто купив накладки Sanwei Target</a>	
					</p>
					<a href="#" class="news-arh">Архів новин</a>
				</div>
                <!-- Информеры -->
                <?php foreach($informers as $informer): ?>
                <div class="info">
                    <h3><?=$informer[0]?></h3>
                    <?php foreach($informer['sub'] as $key => $sub): ?>
                    <p>- <a href="?view=informer&amp;id=<?=$key?>"><?=$sub?></a></p>
                    <?php endforeach; ?>
                </div> <!-- .info -->
                <?php endforeach; ?>
                <!-- Информеры -->
			</div>		
		</div>