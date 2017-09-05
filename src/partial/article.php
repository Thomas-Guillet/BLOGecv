<div id="admin-action">
	<?php 
	if(isset($_SESSION['id'])){
		$html ='';
		$display = '<button id="action-display-article" data-action="display" data-id="'.$article["id"].'" class="display">Display</button>';
		$pending = '<button id="action-pending-article" data-action="pending" data-id="'.$article["id"].'" class="pending">Remove</button>';
		$delete = '<button id="action-delete-article" data-action="delete" data-id="'.$article["id"].'" class="delete">Delete</button>';
		$edit = '<button id="action-edit-article" data-action="edit" data-id="'.$article["id"].'" class="edit">Edit</button>';
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
	}
	?>	
</div>
<div id="main-article">
	<div class="title"><?= $article['title'] ?></div>
	<div class="img"><img src="<?= $article['media'] ?>"></div>
	<div class="content"><?= $article['content'] ?></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$( document ).ready(function() {
	$('[id^="action"]').click(function(){
		var article_id = $(this).data("id");
		var action = $(this).data("action");
		var content = '';
		if(action == 'display'){
			content = 'Êtes-vous sûr de vouloir afficher cet article ?';
		}else if(action =='pending'){
			content = 'Êtes-vous sûr de vouloir retirer de l\'affichage cet article ?';
		}else if(action == 'delete'){
			content = 'Êtes-vous sûr de vouloir supprimer définitivement cet article ?';
		}
		$.ajax({
	          url: "../controller/returnarticle.php",
	          dataType: "json",
	          data: { article_id : article_id },
	          success: function(response) { 
	          	$('#modal-title').html(response['title']);
	          	$('#modal-content').html(content);
	          	$('#modal-action').fadeIn();
	          },
			    error: function (request,status, error) {
		            console.log(error);
		            alert(status);
		        } 
	        });
	});
});


</script>