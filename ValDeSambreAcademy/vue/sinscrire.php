<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Val de Sambre Academy</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/responsive-slider.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/sinscrire.js"></script>

</head>

<body>
  <?php
  include("header.php");
  ?>

  <div class="container">
    <div class="col-lg-6">
      <?php
      if(isset($_GET) && isset($_GET["inscription"]) && $_GET["inscription"]=="valide"){
        echo("<div class='alert alert-success' role='alert'>Votre inscription a été prise en compte. Merci !</div>");
      }


      ?>
      <div id="errormessage"></div>
      <form action="../controller/controller.php?action=inscription"  method="post" class="contactForm">

        <div class="form-group">
          <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom"  data-msg="Entrez un nom" required/>
        </div>

        <div class="form-group">
          <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre prénom"  data-msg="Entrez un prénom" required/>
          <div class="validation"></div>
        </div>

        <div class="form-group">
          <input type="date" name="dateNaissance" class="form-control" id="dateNaissance" pattern="dsqvfds" placeholder="Date de naissance"  data-msg="Entrez une date de naissance" required/>
          <div class="validation"></div>
        </div>

        <div class="form-group">
          <input type="text" name="clubActu" class="form-control" id="clubActu" placeholder="Club actuel"  data-msg="Entrez le club actuel de l'enfant" required />
          <div class="validation"></div>
        </div>

        <div class="form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Entrez un email valide" required />
          <div class="validation"></div>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="numTel" id="numTel" placeholder="Numéro de téléphone" pattern="[0-9]{10}" data-msg="Entrez un numéro de téléphone valide" required />
          <div class="validation"></div>
        </div>

        <div class="text-center"><button type="submit" class="btn btn-default">Envoyez inscription</button></div>


    </div>



    <div class="col-lg-6">
      <select name="choixEvent" id='selecao' class="form-control form-control-lg">

        <?php

          require('../model/connexionBDD.php');

          $conn = new connexionBDD();
          $db = $conn->connexionDB();

            $req=$db->query("SELECT id, nom, date FROM event WHERE cloture=0");

            while($donnees = $req ->fetch(PDO::FETCH_ASSOC)){
              echo("<option id='".$donnees["id"]."'>".$donnees["nom"]."</option>");
            }

         ?>
      </select>

      <img id="afficheImg" class="img-responsive" alt="" />

    </div>
</form>
  </div>









    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-network">
              <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright">
              <p>&copy;Resi Theme - All right reserved.</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Resi
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!--end footer-->




</body>

</html>
