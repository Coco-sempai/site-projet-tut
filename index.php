<!-- Ajouter http://htmlpreview.github.io/? devant l'URL pour visualiser -->

<?php
require 'twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

define("CONSUMER_KEY", "BFf7msh6pz3Kq4JWSwqGhmdLx");
define("CONSUMER_SECRET", "AUKiCafMadG9jvOi6voAAgymayeLiCJpYRKQBavAqq19T8XFZe");
$access_token = "995486197-36Goslb7nUaHoWmYBhK3RZJbauPGBGiOekf8nbPC";
$access_token_secret = "GLkEzKuBlcD4ZJqe8lpkL7qob1k5IkltM8yrCTnS2WwDo";

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

$options = array(
  "screen_name" => "TwitterDev", //Nom du compte
  "include_entities" => false, //Ne récupèrer pas les infos superflues 
  "trim_user" => true, //Récupère seulement l'ID de l'utilisateur
  "exclude_replies" => true, //Ne récupère pas les réponses à des tweets
  "include_rts" => false, //Ne récupère pas les RT
  "count" => 15 //Nombre de tweets à récupérer
);

$statuses = $connection->get("statuses/user_timeline", $options);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Projet tuteuré</title>

		<!-- Framework Materialize -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

		<!-- Feuille de style perso -->
		<link rel="stylesheet" href="css/style.php">

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Script Materialize -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

    	<script src="js/jquery.typist.js"></script>

		<!-- Script perso -->
		<script src="js/script.js"></script>
	</head>

	<body>
		<!-- Barre de navigation -->
		<nav class="grey darken-4">
    		<div class="nav-wrapper">
    	 		<a href="http://www.iut-bm.univ-fcomte.fr/" class="brand-logo"><img src="img/dutInfoLogo.png" alt=""></a>
      			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      			
      			<ul class="right hide-on-med-and-down">
              <li class="active"><a href="index.html">Accueil</a><div class="colorbar"></div></li>
        			<li><a href="">Sujet</a><div class="colorbar"></div></li>
        			<li><a href="membres.html">Membres</a><div class="colorbar"></div></li>
        			<li><a href="">Infographie</a><div class="colorbar"></div></li>
        			<li><a href="contact.html">Contact</a><div class="colorbar"></div></li>
      			</ul>
      			
      			<ul class="side-nav" id="mobile-demo">
        			<li><a href="sass.html">Sass</a></li>
        			<li><a href="badges.html">Components</a></li>
        			<li><a href="collapsible.html">Javascript</a></li>
        			<li><a href="mobile.html">Mobile</a></li>
      			</ul>
    		</div>
      </nav>

  		<header class="valign-wrapper center">
  			<div id="grey-mask"></div>
  			<h1 class="valign main-title">
  				<svg width="186px" height="22px" viewBox="-4 0 186 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <path d="M0,4.8768025 C8.69922932,4.8768025 121.382104,2 168.792189,2 C216.202275,2 26.3856446,8.23981271 16.7336426,15.4152269 C9.77598573,19.2017481 98.4125824,15.4152269 139.865845,15.4152269"></path>
  </svg>
  			</h1>
  		</header>

      <main>
        <pre>
          <?php print_r($statuses); ?>
        </pre>
      </main>

  		<footer class="page-footer grey darken-4">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>

        <div class="pacman">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="footer-copyright">
          <strong>© 2016 Thomas BICHOT, Corentin DE OLIVEIRA, Thomas GARCENOT, Maxime LUCAS, Nathan MERCIER</strong>
        </div>
    </footer>
	</body>
</html>
