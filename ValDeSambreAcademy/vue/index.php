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

</head>

<body>
<?php
include("header.php");
?>

  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="img/slide1.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span>Le nouveau site web de la Val de Sambre Academy</span></h2>
              </div>
              <!-- <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p></p>
                </div>
              </div>-->
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
              <!--   <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required"></button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required"></button>
                  </div>
                </form> -->
              </div>
            </div>
          </div>

          <div class="item">
            <img src="img/slide2.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
                <h2>Suivez les actualités de l'académie</h2>
              </div>
            <!--  <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p></p>
                </div>
              </div>-->
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.8s">
                 <form class="form-inline">
                <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Actualités</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

<!--

  <div class="content">
    <h2><span>Nam libero tempore cum solutanobis est eligendi optio cumque</span></h2>
    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui soluta nobis est
      eligendi optio cumque nihil impedit quo minus id </p>
  </div>
-->

  <div class="breadcrumb">
    <h4>Nos derniers évènements</h4>
  </div>

  <div class="container">
    <div class="row">
      <div class="boxs">
        <div class="col-md-6">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.2s">
            <div class="align-center">
              <h4>Stage Plaiz'Foot</h4>
              <div class="icon">
                <i class="fa fa-heart-o fa-3x"></i>
              </div>
              <p>
                L'académie organise son traditionnel STAGE PLAIZ'FOOT
                du lundi 27.08 au jeudi 30.08 (stade du Glacis de Maubeuge).
              </p>
              <div class="ficon">
                <a href="actualites.html" alt="">Voir plus</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.3s">
            <div class="align-center">
              <h4>Recrutement</h4>
              <div class="icon">
                <i class="fa fa-desktop fa-3x"></i>
              </div>
              <p>
                Le Val de Sambre Academy recrute 4 services civiques pour une mission de 10 mois à partir du 1er septembre 2018.
              </p>
              <div class="ficon">
                <a href="actualites.html" alt="">Voir plus</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="breadcrumb">
    <h4>Qui sommes-nous ?</h4>
  </div>

  <div class="container">
    <div class="row">
      <div class="">
        <div class="col-md-6">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.2s">
            <img src="img/2.png" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-6">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.3s">
            <div class="list-group">
              <div  class="list-group-item">
                <h4 class="list-group-item-heading">La Val de Sambre Football Academy est une association loi 1901</h4>
                <p class="list-group-item-text">Nous avons pour objet de promouvoir la pratique et le développement du football,
                  et d’utiliser le rôle éducatif du sport en matière de citoyenneté, de vivre-ensemble,
                  de sport-santé et d’insertion par le sport.
                </p>
              </div>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">L’association propose un projet d’éducation par le sport  </h4>
                <p class="list-group-item-text"> Ce projet s’articule autour de deux axes majeurs : le projet sportif et le projet éducatif.
                </p>
              </div>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Le projet sportif : </h4>
                <p class="list-group-item-text"> Qualité de la formation du joueur et suivi de l’évolution technique de chaque enfant.
                </p>
              </div>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Le projet éducatif :</h4>
                <p class="list-group-item-text">Mise en place d’actions éducatives selon plusieurs thématiques
                   et évaluations des compétences acquises par les enfants.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="">
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.2s">
            <div class="list-group">
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Les valeurs du club</h4>
                <p class="list-group-item-text">Si la Val De Sambre Academy avait un slogan, ce serait « L’éducation par le sport ».
                </p>
              </div>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Éducation et valeurs citoyennes</h4>
                <p class="list-group-item-text">En effet, l’éducation est le tronc principal de notre association,
                  ainsi que toutes les valeurs de citoyenneté nécessaires à l’épanouissement pour les jeunes telles que le savoir-être,
                   le vivre ensemble ou même l’apprentissage des règles en collectivité.
                </p>
              </div>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">Des éducateurs et des équipes motivés</h4>
                <p class="list-group-item-text">Nous avons choisi de mobiliser toutes nos ressources pour les jeunes et leur éducation.
                  Nous valorisons aussi le qualitatif au quantitatif dans le but de fournir un travail le plus complet et précis qui soit.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="image">
            <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.3s">
              <img src="img/5.jpg" alt="" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <hr>

  <!--start footer
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h5 class="widgetheading">Nam libero tempore</h5>
            <p>soluta nobis est eligendi optio cumque nihil impedit quo minus id excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui

            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget">
            <h5 class="widgetheading">Pages</h5>
            <ul class="link-list">
              <li><a href="#">Press release</a></li>
              <li><a href="#">Terms and conditions</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Career center</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget">
            <h5 class="widgetheading">Latest posts</h5>
            <ul class="link-list">
              <li><a href="#">Lorem ipsum dolor sit amet</a></li>
              <li><a href="#">Pellentesque et pulvinar enim</a></li>
              <li><a href="#">Natus error sit voluptatem </a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>-->

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-network">
              <li><a href="https://www.facebook.com/ValdeSambreAcademy/" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright">
              <a href="contact.html">Nous contacter</a></li>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Resi
                -->

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!--end footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/responsive-slider.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>

</body>

</html>
