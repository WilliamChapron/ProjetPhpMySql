<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content ">
    <li><a class="black white-text" href="PW.php"><i class="material-icons right">arrow_forward_ios</i>William</a></li>
    <li><a class="black white-text" href="PL.php"><i class="material-icons right">arrow_forward_ios</i>Logan</a></li>
    <li><a class="black white-text" href="PLW.php"><i class="material-icons right">arrow_forward_ios</i>L&W Project</a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content ">
    <li><a class="black white-text " href="PW.php">William</a></li>
    <li><a class="black white-text" href="PL.php">Logan</a></li>
    <li><a class="black white-text" href="PLW.php">L&W Project</a></li>
  </ul>

   <!-- Navbar -->
  <nav>
    <div id ="welcome-site" class="nav-wrapper black">
      <a id="pop-image" href="index.php"><img class="brand-logo center"
        src="https://cdn.shopify.com/s/files/1/0628/4866/3789/files/neiwa-logo-white_53d14820-b71e-431f-b4e4-5fa8ca25509d_x120@2x.png?v=1647465961"></a>
      <a href="#" class="sidenav-trigger black " data-target="mobile-links">
        <i class="material-icons">menu</i>
      </a>
      <ul class="hide-on-med-and-down  ">
        <li><a href="index.php"><i class="material-icons left">home</i>Accueil</a></li>
        <li><a class="dropdown-trigger" href="#" data-target="dropdown1"><i class="material-icons left">mail</i>Nos
            projets<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="modal-trigger" data-target="modal-contact"><i class="material-icons left">person</i>Contact</a></li>
        <li><a class='right' href="sign.php"><i class="material-icons left">home</i>Se connecter</a></li>
      </ul>
    </div>
  </nav>

  <!-- Sidenav -->
  <ul class="sidenav black" id="mobile-links">
    <li><a class="white-text" href="index.php"><i class="material-icons white-text right">home</i>Accueil </a></li>
    <li><a class="modal-trigger white-text" data-target="modal-contact">Contact<i class="material-icons white-text right">person</i></a></li>
    <li><a class="dropdown-trigger white-text " href="#" data-target="dropdown2">Nos projets<i class="material-icons right white-text"> arrow_drop_down</i></a></li>
  </ul>