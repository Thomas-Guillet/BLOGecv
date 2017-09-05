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
	<div class="title"><?= html_entity_decode($article['title']) ?></div>
	<div class="img"><img src="<?= $article['media'] ?>"></div>
	<div class="content"><?= html_entity_decode($article['content']) ?></div>
</div>
<hr/>
<div id="comment">
	<div class="title">
		Espace commentaires
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="list-commentaires">
				<?php
				foreach ($list_commentaires as $commentaire) {
					if($commentaire[0]['pseudo'] == null){
						$pseudo = 'Anonyme';
					}else{
						$pseudo = $commentaire[0]['pseudo'];
					}
				?>
				<div class="row header-comment">
					<div class="pseudo-comment">
						Par <?= $pseudo ?>
					</div>
					<div class="date-comment">
						Le <?= $commentaire[0]['created_at'] ?>
					</div>
				</div>
				<div class="content-comment">
					<?= $commentaire[0]['content'] ?>
				</div>
				<?php
				}
				?>
				<div id="create-commentaire">
					<div class="row header-comment">
						<input type="text" placeholder="Votre pseudo">
						<button>Envoyer</button>
					</div>
					<textarea placeholder="Ecrivez votre commentaire ici..."></textarea>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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