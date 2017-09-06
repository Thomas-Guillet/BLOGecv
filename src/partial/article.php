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
<div id="info-article">
	Par Joseph le 28 octobre 2201
	<?php
	foreach ($list_tag as $key => $value) {
	?>
		<div class="tag">'<?= $value[0]['label'] ?></div>
	<?php
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
				<div id="create-commentaire">
					<div class="row header-comment">
						<input id='pseudo-commentaire' type="text" placeholder="Votre pseudo">
						<button id='save-new-commentaire' data-article-id="<?= $article['id'] ?>">Envoyer</button>
					</div>
					<textarea id='content-commentaire'placeholder="Ecrivez votre commentaire ici..."></textarea>
				</div>
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
						<?php
						if($commentaire[0]['state'] == 'pending'){
						?>
						<div class="action-comment">
							<button class='valid-comment' id='admin-commentaire-<?= $commentaire[0]["id"] ?>' data-action='valid' data-id='<?= $commentaire[0]["id"] ?>'>Valider</button>
							<button class='delete-comment' id='admin-commentaire-<?= $commentaire[0]["id"] ?>' data-action='delete' data-id='<?= $commentaire[0]["id"] ?>'>Refuser</button>
						</div>
						<?php
						}
						?>
					</div>
					<div class="content-comment">
						<?= $commentaire[0]['content'] ?>
					</div>
				<?php
				}
				?>
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
	$('#save-new-commentaire').click(function(){
		var article_id = $(this).data("article-id");
		var pseudo = $('#pseudo-commentaire').val();
		var content = $('#content-commentaire').val();
		if(pseudo == ''){
			pseudo = null;
		}
		$.ajax({
			url: "../controller/save_commentaire.php",
			dataType: "text",
			data: { article_id : article_id,
					pseudo : pseudo,
					content : content },
			success: function(response) { 
				$('#create-commentaire').html('<span style="font-family: roboto;font-size: 17px;">Votre commentaire à été envoyé et va être modéré avant affichage</span>');
			},
			error: function (request,status, error) {
				console.log(error);
				alert(status);
			} 
		});
	});


	$('[id^="admin-commentaire-"]').click(function(){
		var commentaire_id = $(this).data("id");
		var action = $(this).data("action");
		$.ajax({
			url: "../controller/admincommentaire.php",
			data: { commentaire_id : commentaire_id,
			action : action },
			success: function(response) { 
				location.reload();
			},
			error: function (request,status, error) {
				console.log(error);
				alert(status);
			} 
		});
	});


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