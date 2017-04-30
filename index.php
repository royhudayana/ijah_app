<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  </head><body>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Jamu Webserver">
  <meta name="author" content="Royan Hudayana">

  <!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fields.css">

  <!--Font-->
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css">

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
  <script src="js/fields.js"></script>

  <!-- autocomplete
  ============================================================-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/ac/jquery.mockjax.js"></script>
  <script type="text/javascript" src="js/ac/jquery.autocomplete.js"></script>
  <script type="text/javascript" src="js/ac/plants.js"></script>
  <script type="text/javascript" src="js/ac/demo.js"></script>

  <!-- labelauty -->
  <script type="text/javascript" src="js/jquery-labelauty.js"></script>
  <link rel="stylesheet" href="css/jquery-labelauty.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.labelauty/1.0/jquery-labelauty.css">

  <script>
    $(document).ready(function(){
    $(":radio, :checkbox").labelauty({
    development: false,
    class: "labelauty",
    label: true,
    separator: "|",
    checked_label: "Checked",
    unchecked_label: "Unchecked",
    minimum_width: "200px",
    same_width: true,
    });
    });
  </script>

  <!-- ladda button -->
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
  <!--   ==================================================-->
  <div class="row" >
      <div class="row feature-box">
          <div class="cnt-title col-sm-12 col-md-12">
           <h1>Jamu Webserver</h1>
            <span>Search for Plant - Compound - Protein - Disease Connectivity.</span><br><br>

            <span><h3>Select one on each side.<h3></span>
          </div>
      </div>
      <!-- Radio -->
      <form action="pilih.php" method="post">
      <div class="row feature-box2">
          <div class="col-md-3 col-offset-4">
            <span class="col-md-3">
              <div class="container">
                  <div class="row">
                      <div class="form-group form-group-options col-md-3">
                        <input class="demo" value="plant" name="left" type="radio" data-labelauty="Plant" checked="checked"/>
                  	</div>
                  </div>
              </div>
            </span>
          </div>
          <div class=" col-md-3">
            <span class="col-md-3 ">
              <div class="container">
                  <div class="row">
                      <div class="form-group form-group-options col-md-3">
                        <input class="demo" value="compound" name="left" type="radio" data-labelauty="Compound"/>
                  	</div>
                  </div>
              </div>
            </span>
          </div>
          <div class="col-md-3 verticalLineA">
            <span class="col-md-3">
              <div class="container">
                  <div class="row">
                      <div class="form-group form-group-options col-md-3">
                        <input class="demo" value="protein" name="right" type="radio" data-labelauty="Protein"  />
                  	</div>
                  </div>
              </div>
            </span>
          </div>
          <div class="col-md-3">
            <span class="col-md-3">
              <div class="container">
                  <div class="row">
                      <div class="form-group form-group-options col-md-3">
                        <input class="demo" value="disease" name="right" type="radio" data-labelauty="Disease" checked="checked"/>
                    </div>
                  </div>
              </div>
            </span>
          </div>
      </div>
      <!-- radio -->
      <div class="row predict">
        <div class="col-sm-12 col-md-12 ">
          <div id="input-canvas"></div>
        </div>
        <p align="center">
          <!-- <button type="submit" class="enjoy-css">Choose</button> -->
          <button class="ladda-button" data-color="green" data-style="expand-right" data-size="s"><span class="ladda-label">Choose</span></button>
        </p>
        </div>
    </form>
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
