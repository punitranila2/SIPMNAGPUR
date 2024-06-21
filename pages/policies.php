<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TECHNEX'20 | TECHNICAL EVENTS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../assets/css/navbar.css" rel="stylesheet">
  <link href="../assets/css/register.css" rel="stylesheet">

  <!-- Google API -->
  <script src="https://apis.google.com/js/api:client.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script type="text/javascript">
        var googleUser = {};
        var startApp = function() {
        gapi.load('auth2', function(){
            // Retrieve the singleton for the GoogleAuth library and set up the client.
            auth2 = gapi.auth2.init({
              client_id:'728518468621-velol6motb7e85duhq4d9e84ab12rtbu.apps.googleusercontent.com',
              cookiepolicy: 'single_host_origin',
              // Request scopes in addition to 'profile' and 'email'
              //scope: 'additional_scope'
            });
            attachSignin(document.getElementById('register'));
          });
        };

        function attachSignin(element) {
          auth2.attachClickHandler(element, {},
              function(googleUser) {
                $.ajax({
                  type: 'POST',
                  url: '../app/register/pages/validate.reg.php',
                  data: {
                    'name': googleUser.getBasicProfile().getName(),
                    'email': googleUser.getBasicProfile().getEmail(),
                    'oauth_id': googleUser.getBasicProfile().getId()
                  },
                  success: function(data) {
                    location.href = '../app/register/pages/profile';
                  }
                })
              }, function(error) {
                alert(JSON.stringify(error, undefined, 2));
              }
          );
        }

        $(document).ready(function() {
          $('input[type="checkbox"]').click(function() {
              if ($(this).prop("checked") == true) {
                $('#register').removeAttr('disabled');
              } else {
                $('#register').attr('disabled');
              }
          });

        });
  </script>
</head>

<body id="particles-js">
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li ><a href="../index">Home</a></li>
          <li><a href="about">About Us</a></li>
          <li><a href="event">Events</a></li>
          <li><a href="gallery">Gallery</a></li>
          <li><a class="menu-active" href="policies">Policies</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main">
    <div class="jumbotron jumbotron-fluid">
      <h1 class="display-4">Register</h1>
    </div>
    
    <div class="container">
      <div class="rules">
          <ol>
              <li>
                  Participant can use Debit/Credit/Rupay card of any bank to pay registration fees.
              </li>
              <li>
                  Entry to participants will be permitted only after verification at registration counter.
              </li>
              <li>
                  Participants should carry the printout of the confirmation letter they download after successful registration along with their college I-cards. They must save all the SMS's they receive from St. Vincent Pallotti College of Engineering and Technology, Nagpur. Both things will be required for verification on the day of event.
              </li>
              <li>
                  To avail accommodation, pickup & participants need to inform minimum 48hrs prior to Mr. Sangharsh Bankar 9075733477 or Mr. Swapnil Patodia 9284123708 of technex'20 team.
              </li>
              <li>
                  Partial payment facility is available, but the registration amount should be paid in maximum 2 installments. The first installment must be at least 30% of the registration amount.
              </li>
              <li>
                  Certificates will be mailed to the registered email address of participants in the registration forms. So enter a valid email address.
              </li>
              <li>
                  If you haven’t received any message and mail or any one of them within the time period of 6 hrs to 12 hrs. <br/>
                  Kindly contact Mr. Nayan Agrawal: +91 8421628277, 797269588 
              </li>
              <li>
                  For enquiries and details regarding Offline registrations <br/>
                  Kindly contact Mr. Amit Bodkhe: +91 9527025227 <br/>
                  Mr. Vijay Gawate : +91 8208875470
              </li>
          </ol>
      </div>
    </div>
  </main>

	<!--==========================
      Footer
    ============================-->
  <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-lg-left text-center">
            <div class="copyright">
              &copy; Copyright <strong>TECHNEX'21</strong>. All Rights Reserved
            </div>
            <div class="credits">
              Designed by <a href="#">TECHNEX'21 WEB TEAM</a>
            </div>
          </div>
          <div class="col-lg-4">
            For more details contact:<br/>
            <b>Siddhant (Coordinator):</b> +91 9158690916 <br/>
            <b>Pratik (Mentor) :</b> +91 7972149168 <br/>
            <b>Shubhi (Co-coordinator) : <br/> +91 9425484211 <br/>
            <b>Shivendra (Co-mentor) : <br/> +91 9370404513 <br/>
          </div>
          <div class="col-lg">
            <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
              <a href="../index" class="scrollto">Home</a>
              <a href="about" class="scrollto">About</a>
              <a href="event" class="scrollto">Events</a>
              <a href="gallery" class="scrollto">Gallery</a>
            </nav>
          </div>
        </div>
      </div>
    </footer><!-- #footer-->

  	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  	<!-- JavaScript Libraries -->
  	<script src="../lib/jquery/jquery.min.js"></script>
  	<script src="../lib/jquery/jquery-migrate.min.js"></script>
  	<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  	<script src="../lib/easing/easing.min.js"></script>
  	<script src="../lib/wow/wow.min.js"></script>
  	<script src="../lib/superfish/hoverIntent.js"></script>
  	<script src="../lib/superfish/superfish.min.js"></script>
  	<script src="../lib/magnific-popup/magnific-popup.min.js"></script>

  	<!-- Template Main Javascript File -->
  	<script src="../assets/js/navbar.js"></script>

</body>
</html>
