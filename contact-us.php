<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contact us</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic%7CLato:300,300italic,400,400italic,700,900%7CMerriweather:700italic">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
      #map {
        height: 500px; /* Hauteur de la carte */
        width: 100%; /* Largeur de la carte */
      }
    </style>

  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"> </div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      
      <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(images/bg-image-1.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Contact us</h2>
          </div>
        </div>
      </section>

      <section class="section-60 section-md-top-90 section-md-bottom-50">
        <div class="container">
          <div class="row row-50 justify-content-lg-between">
            <div class="col-lg-5 col-xl-4">
              <div class="inset-lg-right-15 inset-xl-right-0">
                <div class="row row-30 row-md-40">
                  <div class="col-md-10 col-lg-12">
                    <h3>How to Find Us</h3>
                    <p class="text-secondary">
                      If you have any questions, simply fill out the contact form and we will get back to you as soon as possible. If you live nearby, come and visit JurisNova in our comfortable office.
                      
                    </p>
                  </div>
      
                  <div class="col-md-6 col-lg-12">
                    <h5>Office</h5>
                    <address class="contact-info">
                      <p class="text-uppercase">23 Rue de Bourgogne 75007 Paris France</p>
                      <dl class="list-terms-inline">
                        <dt>Telephone</dt>
                        <dd><a class="link-secondary" href="tel:#">+33 7 80 94 94 17</a></dd>
                      </dl>
                      <dl class="list-terms-inline">
                        <dt>E-mail</dt>
                        <dd><a class="link-primary" href="mailto:#">info@jurisnova.com</a></dd>
                      </dl>
                    </address>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-xl-6">
              <h3>Get in Touch</h3>
              <form class="rd-mailform form-modern" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/contact.php">
                <div class="row row-30">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-name">Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">Email</label>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-wrap">
                      <div class="textarea-lined-wrap">
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                        <label class="form-label" for="contact-message">Message</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row row-30 row-sm-0">
                      <div class="col-sm-8">
                        <button class="button button-primary button-block" type="submit">Send</button>
                      </div>
                      <div class="col-sm-4">
                        <button class="button button-silver-outline button-block" type="reset">Reset</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <div id="map"></div>

      <!-- Inclure le script de Leaflet -->
      <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
      <script>
        // Initialisation de la carte
        var map = L.map('map').setView([48.857908, 2.316842], 16); // Coordonnées latitude, longitude pour Paris

        // Ajout des tuiles OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
          maxZoom: 19,
        }).addTo(map);

        // Ajout d'un marqueur sur la carte
        var marker = L.marker([48.857908, 2.316842]).addTo(map);

        // Ajout d'une popup au marqueur
        marker.bindPopup("<b>23 rue de Bourgogne</b><br>75007 Paris, France").openPopup();
      </script>

      <footer class="page-foot bg-ebony-clay">
       
        <div class="container">
          <hr>
        </div>
        <div class="section-35">
          <div class="container">
            
              <div class="col-md-6 text-md-right">
                <p class="rights text-white"><span class="copyright-year"></span><span>&nbsp;&#169;&nbsp;</span><span>JurisNova.&nbsp; All Rights Reserved.</span>Design&nbsp;by&nbsp;</p>
              </div>
            
          </div>
        </div>
      </footer>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>