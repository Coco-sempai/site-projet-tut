<?php
include('includes/head.php');

include('includes/nav.php');
?>

<script>
	setActive('infographie');
</script>

<main class="container-fluid">
	<div class="row">
		<h1 class="center-align white-text"><strong>Infographie</strong></h1>
		<div class="col l11 offset-l1 s12">
			<h2 class="perso-text hide-on-small-only">Statistiques sur le sujet</h2>
			<h2 class="perso-text center-align hide-on-med-and-up">Statistiques sur le sujet</h2>
		</div>
	</div>

	<div class="row">
		<div class="col l4 s12 offset-l1 right-align">
			<canvas id="myChart" width="100%"></canvas>
			<small>source : <a href="http://www.it-connect.fr/vulnerabilites-apple-et-linux-les-mauvais-eleves-en-2014/" clas="perso-text">IT-Connect</a></small>
		</div>

		<div class="col l6 s12 right-align">
			<h3 class=>Nombre de failles répertoriées</h3>

			<p class="infogp">Entre 2011 et 2014, le nombre de failles de sécurités répertoriées a quasiment doublés.<br>
			Et cette hausse n'est sûrement pas prête de s'arrêter...</p>
		</div>
	</div>

	<div class="row">
		<div class="col offset-l1">
			<h2 class="perso-text">Statistiques sur notre travail</h2>
		</div>
	</div>
</main>

<script>
	var myChart = new Chart($('#myChart'), {
    type: 'line',
    data: {
    	labels: ["2010", "2011", "2012", "2013", "2014"],
        datasets: [{
        	label: "Nombre de failles de sécurités répertoriées",
            data: [4258, 3532, 4347, 4794, 7038],
            backgroundColor: "rgba(129, 212, 250, 0.5)",
            borderColor: "#0DAFE0"
        }]
    }
	})
</script>

<?php
include('includes/foot.php');
?>