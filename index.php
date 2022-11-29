<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Portfolio</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Compiled and minified JavaScript -->
</head>

<body>


  <!-- Easter Egg -->
  <div class="easteregg-1"></div>
  <div class="animate__animated animate__shakeY animate__infinite youwin">YOU WON !</div>
  <div class="easteregg-2-1 easteregg-2"></div>
  <div class="easteregg-2-2 easteregg-2"></div>
  <div class="easteregg-2-3 easteregg-2"></div>
  <div class="easteregg-2-4 easteregg-2"></div>
  <div class="easteregg-2-5 easteregg-2"></div>
  <div class="easteregg-2-6 easteregg-2"></div>
  <div class="easteregg-2-7 easteregg-2"></div>
  <div class="easteregg-2-8 easteregg-2"></div>
  <div class="easteregg-2-9 easteregg-2"></div>
  <div class="easteregg-2-10 easteregg-2"></div>
  <div class="easteregg-2-11 easteregg-2"></div>
  <div class="easteregg-2-12 easteregg-2"></div>
  <div class="easteregg-2-13 easteregg-2"></div>
  <div class="easteregg-2-14 easteregg-2"></div>


  <?php require "components/navbar.php";?>

  <main>


    <!-- Parallax -->

    <div class="parallax-container">

      <h1>Welcome back</h1>
      <h4>Projet William & Logan </h4>
      <a class="waves-effect waves-light btn-small r-btn" href="#profil"><i
          class="material-icons black-text">keyboard_double_arrow_down</i></a>
      <div class="parallax">
        <img src="img/parallax.jpg">
      </div>
    </div>
    <div class="container">
    </div>
    <!-- Row container -->
    <div class="row col-container border-top">
      <div id="profil">
        <h2>-The Profil-</h2>
      </div>

      <div class="col l5 m5 s12 size-transform push-l1 push-m1 top-offset">
        <div class="col l12 m12 s12 sub-container size-transform-box   ">
          <p><span>Logan Bonnet - Profil</span><br></br>Etudiant au sein de G-tech Gaming Campus je m'epanouie dans la programation.A coté je travaille en restauration depuis 1ans et demi en tant que job étudiants je suis en recherche constante de developpement personel. </p>
        </div>
      </div>
      <!-- grid btn & img logan -->
      <div class="col l3 m5 s12 size-transform offset-l3 offset-m1 top-offset">
        <img class="p-p responsive-img " src="./img/logan.jpg">
        <a class="btn-floating pulse modal-trigger white l-btn" href="#modal-1"><i
            class="material-icons black-text">add</i></a>
        <!-- grid btn & img william -->
      </div>
      <div class="col l3 m5 s12 size-transform offset-l1 offset-m1 top-offset inverse">
        <img class="p-p responsive-img " src="img/william.png">
        <a class="btn-floating pulse modal-trigger l-btn white" href="#modal-2"><i
            class="material-icons black-text">add</i></a>
      </div>
      <div class="col l5 m5 s12 push-l1 size-transform top-offset inverse-negative">
        <div class="col l12 m12 s12 sub-container size-transform-box ">
          <p><span>William CHAPRON - Profil </span><br></br>Etudiant au sein de G-tech Gaming Campus, j'ai 18 ans et j'étudie la programmation dans le domaine des jeux vidéos, je suis passionné, très curieux et une fois dans un projet, je suis complétement investi, j'ai des bases en lua, html/css et je suis toujours en quête de nouvelles compétences ...</p>

        </div>
      </div>
      <div class="col l12 m12 s12 size-transform">
      </div>
    </div>
    <!-- footer -->
    <footer>
      <ul>
        <li>
          <p>&copy; copyright by <a href="mailto:gacquart-reylans@gaming.tech">BONNET Logan</a> & <a
              href="mailto:wchapron@gaming.tech">CHAPRON William</a></p>
        </li>
        <li><img id="play"
              src="https://cdn.shopify.com/s/files/1/0628/4866/3789/files/neiwa-logo-white_53d14820-b71e-431f-b4e4-5fa8ca25509d_x120@2x.png?v=1647465961"></a>
        </li>
      </ul>
    </footer>
    <!-- Modal Structure welcome 1 logan -->
    <div id="modal-1" class="modal">
      <div class="modal-content profil-l">
        <div class="row size-row">
          <div class="col l8 m6 s12 modal-size-transform">
            <h4>Rocket-League Projets</h4>
            <p>Ce projet est un site de description d'un jeux vidéo comprenant design et explication en tant que premier projet au gaming campus</p>
          </div>
          <div class="col l4 m6 s12 modal-size-transform">
            <img class="responsive-img " src="../img/rl.png">
            <a class="btn-floating pulse modal-trigger l-btn white" href="PL.php"><i
                class="material-icons black-text">login</i></a>
          </div>
          <div class="col l8 m6 s12 modal-size-transform">
            <h4>Combinaisons-Metaverse Projet</h4>
            <p>Ce projet en colaboration avec william CHAPPRON est en cours de réalisation </p>
          </div>
          <div class="col l4 m6 s12 modal-size-transform">
            <img class="responsive-img " src="../img/pc4.jpg"><a class="btn-floating pulse modal-trigger l-btn white" href="PLW.php"><i
                class="material-icons black-text">login</i></a>
          </div>
        </div>
      </div>
      <div class="modal-footer mLW">
        <a href="#!" class="modal-close btn-floating modal-trigger black"><i
            class="material-icons white-text">close</i></a></a>
      </div>
    </div>
    <!-- Modal Structure welcome 2 william -->
    <div id="modal-2" class="modal">
      <div class="modal-content profil-l">
        <div class="row size-row">
          <div class="col l8 m6 s12 modal-size-transform">
            <h4>Journalist Script Projets</h4>
            <p>Ce projet est un script Garry's Mod codé en lua pour le DarkRP</p>
          </div>
          <div class="col l4 m6 s12 modal-size-transform">
            <img class="responsive-img" src="https://fiverr-res.cloudinary.com/t_main1,q_auto,f_auto/gigs/234949960/original/eec38157d031aadc4edc8929324bbd7e1309c4bf.jpg">
            <a class="btn-floating pulse modal-trigger l-btn white" href="PW.php"><i
                class="material-icons black-text">login</i></a>
          </div>
          <div class="col l8 m6 s12 modal-size-transform">
            <h4>Combinaisons-Metaverse Projet</h4>
            <p>Ce projet en colaboration avec william CHAPPRON est en cours de réalisation </p>
          </div>
          <div class="col l4 m6 s12 modal-size-transform">
            <img class="responsive-img" src="../img/pc4.jpg" ><a class="btn-floating pulse modal-trigger l-btn white" href="PLW.php"><i
                class="material-icons black-text">login</i></a>
          </div>
        </div>
      </div>
      <div class="modal-footer mLW">
        <a href="#!" class="modal-close btn-floating  modal-trigger black"><i
            class="material-icons white-text">close</i></a></a>
      </div>
    </div>
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
                      <label for="autocomplete-input1">prenom</label>
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