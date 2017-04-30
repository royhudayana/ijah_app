<?php
  include 'connect.php';
  $posted = false;
  if( $_POST ) {
    $posted = true;
    $name_ = mysqli_real_escape_string($link, $_POST['name']);
    $email_ = mysqli_real_escape_string($link, $_POST['email']);
    $message_ = mysqli_real_escape_string($link, $_POST['message']);

    // attempt insert query execution
    $sql = "INSERT INTO contact (name, email, message,timestamp) VALUES ('$name_', '$email_', '$message_', now())";
    if(mysqli_query($link, $sql)){
      echo "<script type='text/javascript'>alert('Submitted successfully! Thank you for your response.')</script>";
    }
    else  echo "<script type='text/javascript'>alert('Failed!')</script>";
  }
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    </head><body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
  	<link rel="stylesheet" href="css/bootstrap.css">
  	<link rel="stylesheet" href="css/bootstrap-theme.css">
  	<link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" href="css/fields.css">

    <!--Font-->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css">

    <link async href="http://fonts.googleapis.com/css?family=Advent%20Pro" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

      <!-- Fav and touch icons -->
      <link rel="shortcut icon" href="ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="img/favicon.png">

    <!-- SCRIPT
    ============================================================-->

    <script src="js/bootstrap.min.js"></script>

    <!-- autocomplete
    ============================================================-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/ac/jquery.mockjax.js"></script>

    <link rel="stylesheet" href="js/dist/ladda.min.css">


</head>

<body>
  <!--HEADER ROW-->
  <div id="header-row">
      <div class="container">
          <div class="row">
              <!--LOGO-->
              <div class="col-sm-3 col-md-3">
                <a class="navbar navbar-left" href="index.php"><img src="img/logo.png" class="img-responsive"></a>
              </div>
              <!-- /LOGO -->
              <!-- MAIN NAVIGATION -->
              <div class="col-sm-9 col-md-9">
              <div class="navbar navbar-right">
                  <div class="navbar-header"><a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="navbar-toggle"><span class="glyphicon glyphicon-bar"></span><span class="glyphicon glyphicon-bar"></span><span class="glyphicon glyphicon-bar"></span></a>
                  </div>
                  <div class="navbar-collapse collapse navbar-responsive-collapse">
                      <ul class="nav navbar-nav">
                          <li class="active"><a href="index.php">Home</a>
                          </li>
                          <li class="active"><a href="Contact.php">About Us</a>
                          </li>

                      </ul>
                  </div>
              </div>
              </div>
              <!-- MAIN NAVIGATION -->
          </div>
      </div>
  </div>
  <!-- /HEADER ROW -->



  <div class="container">
  	  <!--PAGE TITLE-->

  	<div class="row">
  		<div class="col-sm-12 col-md-12">
  		<div class="page-header">
  				<h1>
  				Contact
  			  </h1>
  		</div>
  		</div>
  	</div>

    <!-- /. PAGE TITLE-->

    <div class="row">

    	<div class="col-sm-12">
    		<div id="map-canvas">
          <div style="text-decoration:none; overflow:hidden; height:370px; width:1200px; max-width:100%;">
              <div id="google-maps-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Pusat+Studi+Biofarmaka+IPB,+Jalan+Taman+Kencana,+Babakan,+Bogor+City,+West+Java,+Indonesia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embed-map-code" rel="nofollow" href="http://www.hostingreviews.website/inmotion-hosting-review" id="auth-map-data">inmotion reviews</a>
              <style>
                      #google-maps-display .map-generator {
                      zoom: 49;
                      max-width: 100%;
                      max-height: 100%;
                      background: none;

                      }
              </style>
          </div>
          <script src="https://www.hostingreviews.website/google-maps-authorization.js?id=4af3532b-90f5-736f-5714-6621529f516c&c=embed-map-code&u=1472149914" defer="defer" async="async"></script>

        </div>
    	</div>

    		<span class="col-sm-6">

          <link rel="stylesheet" href="css/materialize.css">
          <script src="js/materialize.js"></script>

               <h2>Get in Touch</h2>
               <div class="row">

                 <form action="contact.php" method="POST" class="col s12">
                     <div class="input-field col s6">
                       <input name="name" type="text" class="validate">
                       <label for="name">Name</label>
                     </div>
                     <div class="input-field col s12">
                       <input name="email" type="email" class="validate" required="required">
                       <label for="email">Email</label>
                     </div>
                     <div class="input-field col s12">
                       <textarea name="message" class="materialize-textarea"></textarea>
                       <label for="message">Message</label>
                     </div>
                     <div class="input-field col s12">
                        <div id="input-canvas">
                         <p align="left">
                           <!-- <button type="submit" class="enjoy-css2">Submit</button> -->
                           <section class="button">
                               <button class="ladda-button" data-color="blue" data-style="expand-right" data-size="s"><span class="ladda-label">Submit   </span></button>
                           </section>
                         </p>
                        </div>
                     </div>
                     <script src="js/dist/spin.min.js"></script>
                     <script src="js/dist/ladda.min.js"></script>

                     <script>
                         // Bind normal buttons
                         Ladda.bind( 'section:not(.progress-demo) button', { timeout: 2000 } );

                         // Bind progress buttons and simulate loading progress
                         Ladda.bind( 'section.progress-demo button', {
                             callback: function( instance ) {
                                 var progress = 0;
                                 var interval = setInterval( function() {
                                     progress = Math.min( progress + Math.random() * 0.1, 1 );
                                     instance.setProgress( progress );
                                     if( progress === 1 ) {
                                         instance.stop();
                                         clearInterval( interval );
                                     }
                                 }, 200 );
                             }
                         } );

                     </script>
                 </form>
             </div>
    		</span>

    		<span class="col-sm-6">
    			<h2>Address</h2>
    			<address>
            <strong>Laboratorium Pusat Studi Biofarmaka</strong><br>
            Jl. Taman Kencana Kampus IPB, Taman Kencana No.3<br>
            Bogor Tengah, 16128<br>
            Indonesia<br>
            <abbr title="Phone">Phone:</abbr> +62 251 8373561<br>
            <abbr title="Fax">Fax:</abbr> +62 251 8347525 <br>
            <abbr title="Email">Email:</abbr> bfarmaka@gmail.com
          </address>

          <address>
            <strong>Departemen Ilmu Komputer IPB</strong><br>
            <a href="mailto:#">ilkom@ipb.ac.id</a>
          </address>

    			  <p align="justify">
  	        </p>
    		</span>

    </div>


  </div>


<!--Footer
==========================-->


<footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6">Copyright Biofarmaka IPB | by <a href="http://cs.ipb.ac.id/" target="_blank">Ilmu Komputer IPB</a><br>
        <small>Biofarmaca Research Center</small>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="social pull-right">
                <a href="http://biofarmaka.ipb.ac.id/" target="_blank"><img src="img/social/googleplus.png" alt=""></a>
                <a href="https://twitter.com/BiofarmakaIPB" target="_blank"><img src="img/social/twitter.png" alt=""></a>
            </div>
        </div>
      </div>
    </div>
</footer>

<!--/.Footer-->

</body>
</html>
