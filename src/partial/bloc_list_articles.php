<div id="bloc-list-articles">
	<?php
      foreach ($list_articles as $key => $value) {
		$data = array();
		$data['id'] = $key;
		$data['title'] = $value[0]['title'];
		$data['picture'] = $value[0]['media'];
	?>
	<div class="article" style="background-image: url(<?= $data['picture'] ?>); background-size: cover; background-position: center;">
	<!-- <div class="article"> -->
		<span><?= $data['title'] ?></span>
	<div class="filter"></div>
	</div>
	<?php
	}
      ?>
</div>
