<?php
include('includes/head.php');

include('includes/nav.php');
?>

<script>
  setActive('contact');
</script>

      <main class="contactBackground">
        <div class="row">
          <div class="col l6 offset-l1 s12">
            <div class="contactUs">
              <div id="contact"> NOUS CONTACTER : </div>
              <div id="infos"><a class="contact" href="mailto:projet.iutbm@gmail.com">projet.iutbm@gmail.com</a><br/>
                    IUT Belfort-Montbeliard:<br/>
                    19 Avenue du Maréchal Juin<br/>
                    90000 Belfort
                </div>
              <div id="map"><div class="google-maps"></div></div>
            </div>
          </div>
      
          <div class="formulaireContact col l4 m7 s12">
            <form class="" action="email.php" onsubmit="return verifForm(this)">
              <div class="row">
                <div class="input-field col s12">
                  <input id="nom" name="nom" type="text"  size="70" class="validate">
                  <label for="nom">Nom</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" name="email" type="email" class="validate">
                  <label for="email" data-error="Incorrecte" data-success="Correcte">Email</label>
                </div>
              </div>
            
              <div class="row">
                <div class="input-field col s12">
                  <input id="objet" name="objet" type="text" class="validate">
                  <label for="objet">Objet</label>
                </div>
              </div>
            
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="message" name="message" class="materialize-textarea"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              
              <button type="submit" class="buttonValider">Envoyer</button>
            </form>
          </div>
        </div>
      </main>

    <!-- Google Maps -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK1mestDybATZdIrU4DPqmU3dsqYBupaQ"></script>

        <script type="text/javascript">
          // When the window has finished loading create our google map below
          google.maps.event.addDomListener(window, 'load', init);

          function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
              disableDefaultUI: true,
              draggable: true,
              disableDoubleClickZoom: true,
              scrollwheel: true,

              // How zoomed in you want the map to start at (always required)
              zoom: 15,

              // The latitude and longitude to center the map (always required)
              center: new google.maps.LatLng(47.6434078, 6.8394116), // New York

              // How you would like to style the map.
              // This is where you would paste any style found on Snazzy Maps.
              styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
              position: new google.maps.LatLng(47.6434078, 6.8394116),
              map: map,
              title: 'Notre Localisation!',
              icon: './img/Map_marker.png',
            });
          }
        </script>

    <script type="text/javascript">
      function surligne(champ, erreur)
        {
           if(erreur)
              champ.style.border = "1px solid red";
           else
              champ.style.border = "";
        }
      function verifChamp(champ)
        {
           if(champ.value.length == 0)
           {
              
              return false;
           }
           else
           {
             
              return true;
           }
        }

        function verifForm(f)
          {
             var nomOk = verifChamp(f.nom);
             var mailOk = verifMail(f.email);
             var objectOk = verifChamp(f.objet);
             var messageOk = verifChamp(f.message);
             
             if(nomOk && mailOk && objetOk && messageOk)
                return true;
             else
             {
                alert("Veuillez remplir correctement tous les champs");
                $('.buttonValider').addClass('animated shake');
                $('.buttonValider').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                  $('.buttonValider').removeClass('shake');
                });
             return false;
             }
          }

        function verifMail(champ)
          {
             var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
             if(!regex.test(champ.value))
             {
                
                return false;
             }
             else
             {
               
                return true;
             }
}

    </script>

         <!-- Alerte Mail envoyé -->
        <script type="text/javascript">
          var url = window.location.search;
          if ((url.substring(url.lastIndexOf("=")+1)) == "true"){
            alert("Le message a été envoyé, merci !")
          }
          if ((url.substring(url.lastIndexOf("=")+1)) == "false"){
             alert("Désolé, le message n'a pas pu être envoyé")
          }
        </script>

<?php
include('includes/foot.php');
?>