<!DOCTYPE html>
<?php
include_once "connect.php";
include_once "dao/userDao.php";
include_once "dao/articleDao.php";
include_once "controller/setup_index.php";
?>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(isset($article['title'])){
    ?>
      <meta property="og:title" content="<?= $article['title'] ?>" />
    <?php
    }
    if(isset($article['media'])){
      ?>
      <meta property="og:image" content="<?= 'http://www.'.$_SERVER['HTTP_HOST'].$article['media'] ?>">
    <?php
    }
    ?>

    <title><?php if($action=='article'){echo $article['title'];}else{ echo 'BLOGecv'; } ?></title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
    <div id="navbar">
      <ul>
        <li>
          <a href="/">
            Accueil
          </a>
        </li>
        <?php if(isset($_SESSION['id'])){
            echo '<li><a href="/?new">Nouvel Article</a></li>';
            echo '<li><a href="/?all_articles">Liste des Articles</a></li>';

          }
        ?>
        <li>
          <?php if(isset($_SESSION['id'])){
            echo '<a href="?logout">Déconnexion</a>';
          }else{
            echo '<a href="?connexion">Connexion</a>';
          }?>
        </li>
      </ul>
    </div>

    <?php if($action == 'connexion'){
      ?>
      <div id='connexion'>
        <div class="success" style="display:none">Bienvenue !</div>
        <a href="/"><img src="img/black-cross.png"></a>
          <h1>BLOG<span class="ecv">insight</span><span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></h1>

        <form>
          <input id="email" type="text" placeholder="EMAIL"><br/>
          <input id="password" type="password" placeholder="PASSWORD">
        </form>
      </div>
      <?php
    }else{
    ?>
      <div class="container">
        <div id="content">
          <h1>BLOG<span class="ecv">insight</span><span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></h1>
          <div id="menu">
            <ul>
              <li>
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                    <img height="30px" src="/img/dropdown-menu.png">
                  </button>
                  <ul class="dropdown-menu">
                    <?php
                      foreach ($all_tags as $key => $value) {
                      ?>
                        <li><a href="/?tag=<?= $key ?>"><?= $value[0]['label'] ?></a></li>
                      <?php
                      }
                    ?>
                      <li><a href="/">Tous les articles</a></li>
                  </ul>
                </div>
              </li>
              <div class="hidden-xs">
                <li>
                    TOP TAGS :
                </li>
                <?php
                foreach ($flame_tag as $key => $tag) {
                  ?>
                    <li>
                      <a href="/?tag=<?= $key ?>">
                        <?= $tag[0]['label'] ?>
                      </a>
                    </li>
                  <?php
                }
                ?>
              </div>
            </ul>
          </div>

          <div id="blog">
            <div class="row">
              <div class="col-md-9">
                <?php
                if($action == 'home' || $action == 'tag'){
                  include_once('partial/home.php');
                }else if($action == 'article'){
                  include_once('partial/article.php');
                }else if($action == 'new'){
                  include_once('partial/new.php');
                }else if($action == 'edit'){
                  include_once('partial/edit.php');
                }else if($action == 'list_article'){
                  include_once('partial/list_article.php');
                }
                ?>
              </div>
              <div class="col-md-3 about">
                à propos de nous
                <img src="https://i.pinimg.com/736x/dc/3e/54/dc3e546cc1def8f269e5c91f1fd2bc91--cartoon-smiley-face-smiley-faces.jpg">
                <div class="blog-content">
                  Integer tincidunt, tortor et commodo finibus, tortor sapien lobortis libero, in convallis dui ex in nulla. Suspendisse arcu neque, facilisis ultricies venenatis id, varius sed nisl. Vivamus elementum elementum odio, eget pulvinar metus venenatis et. Vivamus luctus velit eget ante accumsan aliquet. Aenean enim ipsum, convallis et ornare et, ultricies vel nisi. Donec viverra nunc nec enim mollis, eget euismod velit vulputate. Phasellus cursus consequat finibus.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="footer">
        lien
      </div>
      <div id="post-footer">
        created with <i class="fa fa-heart" aria-hidden="true"></i> by thomas guillet
      </div>
    <?php
    }
    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<div class="loading" style="display:none">
<!-- <img src="svg-loaders/grid.svg" /> -->
</div>

<div id="modal-action" style="display: none">
  <div class="modal">
    <div id="modal-title" class="title">
    </div>
    <hr>
    <div id="modal-content" class="content">
    </div>
    <div class="action">
      <button id='valid-modal'>Valider</button>
      <button id='cancel-modal'>Annuler</button>
    </div>
    <div class="logo">
      <h1>BLOG<span class="ecv">insight</span><span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></h1>
    </div>
  </div>
</div>

<script>
$( document ).ready(function() {
    // $('.loading').fadeToggle(800, "linear");
});

$('#cancel-modal').click(function(){
  $('#valid-modal').prop('onclick',null).off('click');
  $('#modal-action').fadeOut();
});
</script>
<?php
if($action == 'connexion'){
?>
<script>
$(document).keypress(function(e) {
    if(e.which == 13) {
      var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
      var mail = $('#email').val();
      var password = $('#password').val();
      if(mail == ""){
        alert('veuillez remplir votre email');
      }else if(!testEmail.test(mail)){
        alert('veuillez entrer un email valide');
      }else if(password ==""){
        alert('veuillez remplir votre mot de passe');
      }else{
        $.ajax({
          url: "controller/connexion.php",
          dataType: "text",
          data: { mail : mail, password : password },
          success: function(response) {
            if(response === "err_mail"){
              alert('cet email ne correspond à aucun compte');
            }else if(response === "err_pass"){
              alert('Mauvaise combinaison email/mot de passe');
            }else{
              $('.success').fadeToggle(800, "linear");
              setTimeout(window.location.replace('/'), 1000); 
            }
          }
        });
      }
    }
});
</script>
<?php
}
?>