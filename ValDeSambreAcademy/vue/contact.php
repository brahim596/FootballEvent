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

  <div class="container">
    <div class="col-lg-6">
      <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validation"></div>
        </div>

        <div class="text-center"><button type="submit" class="btn btn-default">Send Message</button></div>
      </form>

    </div>
    <div class="col-lg-6">
      <div class="map">
        <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
      </div>
    </div>
  </div>

  <address>
			<strong>
			Written by:<a href="https://bootstrapmade.com" target="_blank">Gampang Prasetyo</a><br>
			Visit us at:<br>
			<a href="https://bootstrapmade.com" target="_blank">http://bootstrapmade.com</a><br>
			Box 564, Disneyland<br>
			USA<br>
			</strong>
		</address>

  <hr>

  <!--start footer-->
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

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/responsive-slider.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  
  <script src="contactform/contactform.js"></script>

</body>

</html>
