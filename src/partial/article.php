<div id="admin-action">
	<?php 
	$html ='';
	$display = '<button class="display">Display</button>';
	$pending = '<button class="pending">Remove</button>';
	$delete = '<button class="delete">Delete</button>';
	$edit = '<button class="edit">Edit</button>';
	if($article['state'] == 'pending'){
		$html .= $display;
		$html .= $edit;
		$html .= $delete;
	}else if($article['state'] == 'enable'){
		$html .= $pending;
		$html .= $edit;
		$html .= $delete;
	} 
	echo $html;
	?>	
</div>
<div id="main-article">
	<div class="title"><?= $article['title'] ?></div>
	<div class="img"><img src="<?= $article['media'] ?>"></div>
	<div class="content"><?= $article['content'] ?></div>
</div>