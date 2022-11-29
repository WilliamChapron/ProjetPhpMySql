<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Projects Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon"
    href="https://cdn.shopify.com/s/files/1/0628/4866/3789/files/neiwa-logo-white_53d14820-b71e-431f-b4e4-5fa8ca25509d_x120@2x.png?v=1647465961" />
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Font family cabin condensed -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed&family=Raleway&display=swap" rel="stylesheet">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>



<body>
  
  <?php

    require "components/navbar.php";

  ?>

  <main>
   
    <div class="row  black project-container">=
      <div class="col l5 m6 s12 size-transform-project">
        <div class="col l8 m8 s8 push-l2 push-m2 push-s2 sub-container-project size-transform-project-box top-offset-project">
          <p class="p-1"> <span>Projet - Combinaison Metavers</span> <br><br>Cette combianaison nous permettera de ressentir le touché dans le metavers ainsi que le poids et les solide dans celui-ci ce projet et la clé vers la simulation quasi total qu'est la vr </p>
        </div>
      </div>
      <div class="col l7 m6 s12 size-transform-project">
        <div class="carousel carousel-slider prev center top-offset-project">
          <div class="carousel-item red white-text mlt" href="#one!">
          </div>
          <div  class="carousel-item red white-text mlt1" href="#two!"> 
          </div>
          <div class="carousel-item red white-text mlt3" href="#one!">
          </div>
        </div>
      </div>
      <div class="col l7 m6 s12 size-transform-project ">
        <div class="carousel next carousel-slider center">
            <div class="carousel-item red white-text mlt3" href="#one!">
            </div>
            <div class="carousel-item amber white-text mlt2" href="#two!">
            </div>
            <div class="carousel-item white-text mlt" href="#three!">
            </div>
          </div>
      </div>
      <div class="col l5 m6 s12 size-transform-project">
        <div class="col l8 m8 s8 push-l2 push-m2 push-s2 sub-container-project size-transform-project-box top-offset-project inverse-project">
          <p class="p-2"><br>Cette combinaison aura plusieurs version pour pouvoir être accessible a toute les classe social en commencant a 350e jusqu'a 1800e pour la version la plus avancé qui permet de ressentir jusqu'a la pluie le vent .</p>
        </div>
      </div>
    </div>
      <!-- footer -->
    <footer>
      <ul>
        <li><p>&copy; copyright by <a href="mailto:gacquart-reylans@gaming.tech">BONNET Logan</a> & <a href="mailto:wchapron@gaming.tech">CHAPRON William</a></p></li>
        <li><a href="#welcome-site"><img
        src="https://cdn.shopify.com/s/files/1/0628/4866/3789/files/neiwa-logo-white_53d14820-b71e-431f-b4e4-5fa8ca25509d_x120@2x.png?v=1647465961"></a></li>
      </ul>
    </footer>
        <!-- Modal Structure contact -->
    <div id="modal-contact" class="modal bottom-sheet">
      <div class="modal-content contact">
        <div id="form">
          <div class="form">
            <form action="/my-handling-form-page" method="post">
              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <div class="input-field col s12 white-text">
                      <i class="material-icons prefix white-text">person</i>
                      <input type="text" id="autocomplete-input1" class="autocomplete">
                      <label for="autocomplete-input1">Identité</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <div class="input-field col s12 white-text">
                      <i class="material-icons prefix white-text">mail</i>
                      <input type="text" id="autocomplete-input2" class="autocomplete">
                      <label for="autocomplete-input2">Mail</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <div class="input-field col s12 white-text">
                      <i class="material-icons prefix white-text">location_city</i>
                      <input type="text" id="autocomplete-input3" class="autocomplete">
                      <label for="autocomplete-input3">Entreprise </label>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="user-message">
                <textarea id="msg" name="user_message" placeholder="Des questions ou des précisions ? N'hesiter pas, écrivez"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer closer">
        <a href="#!" class="modal-close btn-floating pulse modal-trigger l-btn black"><i
            class="material-icons white-text">send</i>Envoyer</a>
      </div>
    </div>
  </main>



  
  <script type="text/javascript" src="js/j.query.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

  
</body>

</html>