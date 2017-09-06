<div id="admin-action">
<?php 
  if(isset($_SESSION['id'])){
    $html ='';
    $display = '<button id="action-display-article" data-action="display" data-id="'.$article[0].'" class="display">Display</button>';
    $pending = '<button id="action-pending-article" data-action="pending" data-id="'.$article[0].'" class="pending">Remove</button>';
    $delete = '<button id="action-delete-article" data-action="delete" data-id="'.$article[0].'" class="delete">Delete</button>';
    if($article['state'] == 'pending'){
      $html .= $display;
      $html .= $delete;
    }else if($article['state'] == 'enable'){
      $html .= $pending;
      $html .= $delete;
    } 
    echo $html;
  }
  ?>
  </div>  
<div id='new'>
   <form enctype="multipart/form-data" action="controller/update_upload.php" method="post">
          <p>
            <input type="hidden" name="article_id" value="<?= $article[0] ?>" />
      <input type="text" name="title" placeholder="Title" value="<?= $article['title'] ?>">
      <?php
            foreach ($list_tag as $key => $value) {
              $checked = '';
              if(isset($list_checked_tag[$key])){
                $checked = 'checked';
              }
            ?>
            <input id="toggle<?= $key ?>" name="tag_<?= $key ?>" type="checkbox" onclick="clickCheck(this);" <?= $checked ?>>
            <label for="toggle<?= $key ?>"><?= $value[0]['label'] ?></label>
            <?php
            }
            ?>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
            <input name="fichier" type="file" id="fichier_a_uploader" />
			<textarea name="content"><?= $article['content'] ?></textarea>
            <input type="submit" name="submit" value="Sauvegarder" />
          </p>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
  selector: 'textarea',
  height: 300,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
</script>

<script>
$( document ).ready(function() {

$('[id^="action"]').click(function(){
    var article_id = $(this).data("id");
    var action = $(this).data("action");
    var content = '';
    var link_action = '';
    if(action == 'display'){
      content = 'Êtes-vous sûr de vouloir afficher cet article ?';
      link_action = '/controller/action?display_article&id='+article_id;
    }else if(action =='pending'){
      content = 'Êtes-vous sûr de vouloir retirer de l\'affichage cet article ?';
      link_action = '/controller/action?remove_article&id='+article_id;
    }else if(action == 'delete'){
      content = 'Êtes-vous sûr de vouloir supprimer définitivement cet article ?';
      link_action = '/controller/action?delete_article&id='+article_id;
    }else if(action == 'edit'){
            window.location.href = '/?edit&id='+article_id;
    }
    $.ajax({
            url: "../controller/returnarticle.php",
            dataType: "json",
            data: { article_id : article_id },
            success: function(response) { 
              $('#modal-title').html(response['title']);
              $('#modal-content').html(content);
              $('#modal-action').fadeIn();
              $('#valid-modal').click(function(){
                window.location.href = link_action;
        })
            },
          error: function (request,status, error) {
                console.log(error);
                alert(status);
            } 
          });
  });
  });

</script>

<script>
$(document).ready(function(){
    var nbCheck = 0;
    function isChecked(elmt){
        if( elmt.checked ){
            return true;
        }
        else{
            return false;
        }
    }
    function clickCheck(elmt){
        if( (nbCheck < 3) || (isChecked(elmt) == false) ){
            if( isChecked(elmt) == true ){
                nbCheck += 1;
            }
            else{
                nbCheck -= 1;
            }
        }
        else{
            elmt.checked = '';
        }
    }
  });
</script>