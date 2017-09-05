<div id="admin-action">
	<?php var_dump($article);exit; ?>
	<button class="display">Display</button>
	<button class="pending">Pending</button>
	<button class="delete">Delete</button>
</div>
<div id="main-article">
	<div class="title"><?= $article['title'] ?></div>
	<div class="img"><img src="<?= $article['media'] ?>"></div>
	<div class="content"><?= $article['content'] ?></div>
</div>