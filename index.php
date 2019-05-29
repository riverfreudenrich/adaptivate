<div id="info-blocks">
<?php $blocks = get_sub_field('blocks'); if (count($blocks) == 2) : ?>

<div class="split-content left">
	<div class="image" style="background-image:url(<?= $blocks[0]['image'] ?>);"></div>
	<p><?= $blocks[0]['text'] ?></p>
	<a href="<?= $blocks[0]['link'] ?>"></a>
</div>
<div class="split-content right">
	<div class="image" style="background-image:url(<?= $blocks[1]['image'] ?>);"></div>
	<p><?= $blocks[1]['text'] ?></p>
	<a href="<?= $blocks[1]['link'] ?>"></a>
</div>

<?php elseif (count($blocks) == 3) : ?>

<div class="split-content left">
	<div class="image" style="background-image:url(<?= $blocks[0]['image'] ?>);"></div>
	<p><?= $blocks[0]['text'] ?></p>
	<a href="<?= $blocks[0]['link'] ?>"></a>
</div>
<div class="split-content right">
	<div class="image" style="background-image:url(<?= $blocks[1]['image'] ?>);"></div>
	<p><?= $blocks[1]['text'] ?></p>
	<a href="<?= $blocks[1]['link'] ?>"></a>
</div>
<div class="full-width">
	<div class="image" style="background-image:url(<?= $blocks[2]['image'] ?>);"></div>
	<p><?= $blocks[2]['text'] ?></p>
	<a href="<?= $blocks[2]['link'] ?>"></a>
</div>

<?php else :  ?>

<div class="full-width">
	<div class="image" style="background-image:url(<?= $blocks[0]['image'] ?>);"></div>
	<p><?= $blocks[0]['text'] ?></p>
	<a href="<?= $blocks[0]['link'] ?>"></a>
</div>

<?php endif; ?>
</div>
