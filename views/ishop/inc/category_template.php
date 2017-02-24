<li>
    <a href="?view=category=<?=$category['parent_id']?>"><?=$category['brand_name']?></a>
	<?php if($category['childs']): ?>
	<ul>
		<?php echo categories_to_string($category['childs']); ?>
	</ul>
	<?php endif; ?>
</li>