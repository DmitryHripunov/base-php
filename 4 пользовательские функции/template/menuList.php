<ul class="<?=$ulClass?>">
<?php
	foreach ($menu as $key) {?>
		<li class="nav-item">
			<a class="<?= titlesMenu\getClassLink($key['path']) ?>"
							href="<?= $key['path'] ?>"
			><?=mb_strimwidth($key['title'], 0, 15, '...');?></a>
		</li>
<?php } ?>
</ul>
