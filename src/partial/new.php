<div id='new'>
   <form enctype="multipart/form-data" action="controller/upload.php" method="post">
          <p>
			<input type="text" name="title" placeholder="Title">
            <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
            <input name="fichier" type="file" id="fichier_a_uploader" />
			<textarea name="content"></textarea>
            <input type="submit" name="submit" value="Sauvegarder" />
          </p>
    </form>
</div>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
  selector: 'textarea',
  height: 500,
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