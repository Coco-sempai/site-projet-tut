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

//Haut de page
include('includes/head.php');

//Barre de navigation
include('includes/nav.php')
?>

<script type="text/javascript">
  setActive('accueil');
</script>

<header class="valign-wrapper center">
  <div id="grey-mask"></div>
  <h1 class="valign main-title">
    <svg class="hide-on-small-only" width="186px" height="22px" viewBox="-4 0 186 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <path d="M0,4.8768025 C8.69922932,4.8768025 121.382104,2 168.792189,2 C216.202275,2 26.3856446,8.23981271 16.7336426,15.4152269 C9.77598573,19.2017481 98.4125824,15.4152269 139.865845,15.4152269"></path>
    </svg>
  </h1>
</header>

<main>

</main>

<?php
//Bas de page
include('includes/foot.php');
?>