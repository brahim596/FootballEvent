
<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

  if(isset($_GET) && isset($_GET["key"]) && !isset($_SESSION["admin"]) && ($_GET["key"]=="a4e0f7ede42313aef317f68c181d28aa") ) {

    $_SESSION["admin"]=1;

  }
 ?>
   <script src="js/jquery-2.1.1.min.js"></script>
 <script src="js/header.js"></script>
<header>
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="navbar-brand">
              <a href="index.php"><h1>Val de Sambre Football Academy</h1></a>
            </div>
          </div>
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li  onClick="activeColor()" role="presentation"><a href="index.php">Accueil</a></li>
              <li  onClick="activeColor()" role="presentation"><a href="actualites.php">Actualités</a></li>
              <li  onClick="activeColor()" role="presentation"><a href="blog.php">Club</a></li>
              <li  onClick="activeColor()" role="presentation"><a href="blog.php">Équipes</a></li>
              <li  onClick="activeColor()" role="presentation"><a href="media.php">Médiathèque</a></li>
              <li  onClick="activeColor()" role="presentation"><a href="sinscrire.php">Inscription</a></li>

              <?php
              if(isset($_SESSION) && isset($_SESSION["admin"])){


                echo("<li role='presentation'><a href='listeInscrit.php'>Liste inscrits</a></li>");
              }
              //?key=a4e0f7ede42313aef317f68c181d28aa
              //
              ?>

              <li role="presentation"><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>
