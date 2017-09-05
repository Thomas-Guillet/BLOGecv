<?php
  $list_articles = getAllActiveArticles();
  $html_row_1 = '';
  $html_row_2 = '';
  $html_row_3 = '';
  foreach ($list_articles as $key => $value) {
    $data = array();
    $data['id'] = $key;
    $data['title'] = $value[0]['title'];
    $data['picture'] = $value[0]['media'];
    $article = include('preview_article.php');
    if($key % 3 == 1){
      $html_row_1 .= $article;
    }else if($key % 3 == 2){
      $html_row_2 .= $article;
    }else if($key % 3 == 0){
      $html_row_3 .= $article;
    }
  }
?>
<div class="col-md-4">
  <?= $html_row_1 ?>
</div>
<div class="col-md-4">
  <?= $html_row_2 ?>
</div>
<div class="col-md-4">
  <?= $html_row_3 ?>
</div>