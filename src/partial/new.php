<div id='new'>
   <form enctype="multipart/form-data" action="controller/upload.php" method="post">
          <p>
      			<input type="text" name="title" placeholder="Title">
            <?php
            foreach ($list_tag as $key => $value) {
            ?>
            <input id="toggle<?= $key ?>" name="tag_<?= $key ?>" type="checkbox" onclick="clickCheck(this);" >
            <label for="toggle<?= $key ?>"><?= $value[0]['label'] ?></label>
            <?php
            }
            ?>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
            <input name="fichier" type="file" id="fichier_a_uploader" />
			<textarea name="content"></textarea>
            <input type="submit" name="submit" value="Sauvegarder" />
          </p>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
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