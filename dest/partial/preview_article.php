<?php
$content = '<a href="?article&id='.$data['id'].'"><section id="article"><img src="'.$data['picture'].'"><div class="tags">';
foreach ($list_tag as $key => $value) {
	$content .= '<div class="tag">'.$value[0]['label'].'</div>';
}
$content .= '</div><div class="title">'.$data['title'].'</div></section></a>';
return $content;