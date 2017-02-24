<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

		<h4>- Мобильные телефоны</h4>
				<ul class="nav-catalog" id="accordion">
                    <?php foreach($cat as $key => $item): ?>
                        <?php if(count($item) > 1): // если это родительская категория ?>
                        <h3><li><a href="#"><?=$item[0]?></a></li></h3>
                            <ul>
                                <li>- <a href="?view=cat&amp;category=<?=$key?>">Все модели</a></li>
                                <?php foreach($item['sub'] as $key => $sub): ?>
                                <li>- <a href="?view=cat&amp;category=<?=$key?>"><?=$sub?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php elseif($item[0]): // если самостоятельная категория ?>
                            <li><a href="?view=cat&amp;category=<?=$key?>"><?=$item[0]?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
				</ul>
