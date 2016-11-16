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

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </a>
      </div>

      <div class="col s12 m4 l4 col-subject">
        <a href="technique.php">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Partie technique</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </a>
      </div>

      <div class="col s12 m4 l4 col-subject">
        <a href="interview.php">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">voicemail</i></h2>
            <h5 class="center">Interview</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</main>

<?php
include('includes/foot.php');
?>