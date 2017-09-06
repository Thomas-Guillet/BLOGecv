<?php
  if($html_row_1 == '' && $html_row_2 == '' && $html_row_3 == ''){
  	echo 'Cette catégorie ne dispose pas encore d\'articles !';
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