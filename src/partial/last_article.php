<?php

$content = '<a href="?article&id='.$data['id'].'"><div id="last-article"><div class="background" style="background-image: url('.$data['picture'].');"></div><div class="tags">';
foreach ($list_tag as $key => $value) {
	$content .= '<div class="tag">'.$value[0]['label'].'</div>';
}
$content .= '</div><div class="content">'.substr(html_entity_decode($data['title']), 0, 47).' ...</div></div></a>';

return $content;