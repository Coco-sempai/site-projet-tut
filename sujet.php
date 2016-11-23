<?php 
include('includes/head.php');

include('includes/nav.php');
?>

<script>
	setActive('sujet');
</script>

<main>
  <div id="container">
    <div class="row center-align" style="padding-bottom: 50px; padding-top: 20px;">
      <h1>Présentation du rapport</h1>
    </div>

    <div class="row" style="margin-bottom: 100px">
      <div class="col s12 m4 l4 col-subject">
        <a href="eco.php">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">trending_up</i></h2>
            <h5 class="center">Partie économique et juridique</h5>

            <p class="light">Vous êtes vous déjà demandé combien coûte les failels informatiques dans le monde ? Si oui, alors empressez vous de cliquer ici !</p>
          </div>
        </a>
      </div>

      <div class="col s12 m4 l4 col-subject">
        <a href="technique.php">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Partie technique</h5>

            <p class="light">Si la partie technique vous intéresse alors découvrez les rouages de notre site Internet.</p>
          </div>
        </a>
      </div>

      <div class="col s12 m4 l4 col-subject">
        <a href="interview.php">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">voicemail</i></h2>
            <h5 class="center">Interview</h5>

            <p class="light">Ici, vous pourrez retrouver une synthèse de l'interview que nous avons réalisé avec un expert en sécurité informatique.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</main>

<?php
include('includes/foot.php');
?>