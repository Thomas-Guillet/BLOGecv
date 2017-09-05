<!DOCTYPE html>
<?php
include_once "connect.php";
include_once "dao/userDao.php";
include_once "dao/articleDao.php";
include_once "controller/setup_index.php";
?>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ECV BLOG<?php if($action=='article'){echo ' - '.$article['title'];} ?></title>

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
            Home
          </a>
        </li>
        <?php if(isset($_SESSION['id'])){
            echo '<li><a href="/?new">Nouvel Article</a></li>';
            echo '<li><a href="/?all_articles">Liste des Articles</a></li>';

          }
        ?>
        <li>
          <?php if(isset($_SESSION['id'])){
            echo '<a href="#">'.$_SESSION['prenom'].'</a>';
          }else{
            echo '<a href="#">About</a>';
          }
          ?>
        </li>
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
          <h1>BLOG<span class="ecv">ecv</span><span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></h1>

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
          <h1>BLOG<span class="ecv">ecv</span><span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></h1>
          <div id="menu">
            <ul>
              <li>
                <a href="/">
                  Home
                </a>
              </li>
              <li>
                <a href="#">
                  Exemple
                </a>
              </li>
              <li>
                <a href="#">
                  Categories
                </a>
              </li>
            </ul>
          </div>

          <div id="blog">
            <div class="row">
              <div class="col-md-9">
                <?php
                if($action == 'home'){
                  include_once('partial/home.php');
                }else if($action == 'article'){
                  include_once('partial/article.php');
                }else if($action == 'new'){
                  include_once('partial/new.php');
                }else if($action == 'list_article'){
                  include_once('partial/list_article.php');
                }
                ?>
              </div>
              <div class="col-md-3 about">
                About Us
                <img src="http://www.letudiant.fr/static/uploads/plugoBrowser/ETU_ETU/OSP/ecv-terre_image.gif">
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

<div class="loadingforupload" style="display:block">
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
      <h1>BLOG<span class="ecv">ecv</span><span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></h1>
    </div>
  </div>
</div>

<script>
$( document ).ready(function() {
    $('.loadingforupload').fadeToggle(800, "linear");

});

$('a').click(function(e){
  $('.loadingforupload').fadeToggle(10, "linear");
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