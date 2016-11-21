<!-- Ajouter http://htmlpreview.github.io/? devant l'URL pour visualiser -->

<?php
include('includes/twitterapi.php');

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
  <h1 class="valign main-title hide-on-small-only hide-on-med-and-down">
    <svg width="186px" height="22px" viewBox="-4 0 186 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <path d="M0,4.8768025 C8.69922932,4.8768025 121.382104,2 168.792189,2 C216.202275,2 26.3856446,8.23981271 16.7336426,15.4152269 C9.77598573,19.2017481 98.4125824,15.4152269 139.865845,15.4152269"></path>
    </svg>
  </h1> 
</header>

<main>
  <div class="row tweet-row">
    <h3>Derniers tweets de <a href="http://www.twitter.com/TwitterDev">@TwitterDev</a></h3>
    <?php for($i = 0 ; $i < 6 ; $i++): ?>
      <?php 
      $text = explode('https', $statuses[$i]->text); 
      $date = date("d/m/Y \à H:i", strtotime($statuses[$i]->created_at));
      ?>

      <div class="col s6 m2 l2 tweet">
          <a <?php echo isset($text['1']) ? "href='https".$text['1']."'" : ''; ?> target="_blank">
            <i class="material-icons">format_quote</i>
            <?php echo $text['0']; ?>
            <i class="material-icons">format_quote</i>
          </a>
          <br>
          <span><?php echo $date; ?></span>
      </div>
    <?php endfor; ?>
  </div>
</main>

<?php
//Bas de page
include('includes/foot.php');
?>