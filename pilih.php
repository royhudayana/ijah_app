<?php
$var1 = $_POST['left'];
$var2 = $_POST['right'];
?>
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

  <!-- <link async href="http://fonts.googleapis.com/css?family=Advent%20Pro" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/> -->

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
  <!-- ==================================================-->
  <div class="row">
      <div class="row feature-box">
          <div class="cnt-title col-sm-12 col-md-12">
           <h1>Jamu Webserver</h1>
            <span>Search for Plant - Compound - Protein - Disease Connectivity.</span><br>
            <!-- <span><font size="3">*Type a name based on www.uniprot.org, www.ncbi.nlm.nih.gov/protein, and pubchem.ncbi.nlm.nih.gov</font></span><br><br> -->
          </div>
      </div>


      <!-- 1
      ============================================================-->
      <form action="predict.php" method="POST">

      <?php
      if($var1 == "plant") echo'<div class="col-sm-6 col-md-6 col-offset-2">
                                <h3>Plant</h3>
                                <span class="col-md-6">
                                  <div class="container">
                                      <div class="row">
                                          <div class="form-group form-group-options col-sm-5 col-md-5">
                                          <div class="verticalLine1">
                                          <div class="input-group input-group-option col-xs-12">
                                            <input type="hidden" name="left" value="plant" >
                                            <input type="text" name="att11" id="autocomplete-ajax11" class="form-control" placeholder="Type something" required>
                                              <span class="input-group-addon input-group-addon-remove ">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                              </span>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="form-group form-group-options col-sm-5 col-md-5">
                                          <div class="verticalLine1">
                                          <div class="input-group input-group-option col-xs-12">
                                            <input type="text" name="att21" id="autocomplete-ajax21" class="form-control" placeholder="Type something">
                                              <span class="input-group-addon input-group-addon-remove ">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                              </span>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="form-group form-group-options col-sm-5 col-md-5">
                                          <div class="verticalLine1">
                                          <div class="input-group input-group-option col-xs-12">
                                            <input type="text" name="att31" id="autocomplete-ajax31" class="form-control" placeholder="Type something">
                                              <span class="input-group-addon input-group-addon-remove ">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                              </span>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="form-group form-group-options col-sm-5 col-md-5">
                                          <div class="verticalLine1">
                                          <div class="input-group input-group-option col-xs-12">
                                            <input type="text" name="att41" id="autocomplete-ajax41" class="form-control" placeholder="Type something">
                                              <span class="input-group-addon input-group-addon-remove ">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                              </span>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="form-group form-group-options col-sm-5 col-md-5">
                                          <div class="verticalLine1">
                                          <div class="input-group input-group-option col-xs-12">
                                            <input type="text" name="att51" id="autocomplete-ajax51" class="form-control" placeholder="Type something">
                                              <span class="input-group-addon input-group-addon-remove ">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                              </span>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </span>
                                </div>';

      if($var1 == "compound") echo'<div class="col-sm-6 col-md-6 col-offset-2">
                                  <h3>Compound</h3>
                                  <span class="col-md-3 ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine2">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="hidden" name="left" value="compound">
                                              <input type="text" name="att12" id="autocomplete-ajax12" class="form-control" placeholder="Type something" required>
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine2">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att22" id="autocomplete-ajax22" class="form-control" placeholder="Type something">
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine2">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att32" id="autocomplete-ajax32" class="form-control" placeholder="Type something">
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine2">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att42" id="autocomplete-ajax42" class="form-control" placeholder="Type something">
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine2">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att52" id="autocomplete-ajax52" class="form-control" placeholder="Type something">
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                                    </div>
                                  </span>
                                  </div>';

      if($var2 == "protein") echo'<div class="col-sm-6 col-md-6 verticalLineA">
                                  <h3>Protein</h3>
                                  <span class="col-md-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine3">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="hidden" name="right" value="protein">
                                              <input type="text" name="att13" id="autocomplete-ajax13" class="form-control" placeholder="Type something" required>
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine3">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att23" id="autocomplete-ajax23" class="form-control" placeholder="Type something">
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine3">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att33" id="autocomplete-ajax33" class="form-control" placeholder="Type something">
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine3">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att43" id="autocomplete-ajax43" class="form-control" placeholder="Type something">
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine3">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att53" id="autocomplete-ajax53" class="form-control" placeholder="Type something">
                                                <span class="input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </span>
                                </div>';

      if($var2 == "disease") echo'<div class="col-sm-6 col-md-6 verticalLineA">
                                  <h3>Disease</h3>
                                  <span class="col-md-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine4">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="hidden" name="right" value="disease">
                                              <input type="text" name="att14" id="autocomplete-ajax14" class="form-control" placeholder="Type something" required>
                                                <span class="autocomplete-ajax4 input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine4">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att24" id="autocomplete-ajax24" class="form-control" placeholder="Type something">
                                                <span class="autocomplete-ajax4 input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine4">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att34" id="autocomplete-ajax34" class="form-control" placeholder="Type something">
                                                <span class="autocomplete-ajax4 input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine4">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att44" id="autocomplete-ajax44" class="form-control" placeholder="Type something">
                                                <span class="autocomplete-ajax4 input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group-options col-sm-5 col-md-5">
                                            <div class="verticalLine4">
                                            <div class="input-group input-group-option col-xs-12">
                                              <input type="text" name="att54" id="autocomplete-ajax54" class="form-control" placeholder="Type something">
                                                <span class="autocomplete-ajax4 input-group-addon input-group-addon-remove">
                                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                  </span>
                                              </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </span>
                                  </div>';
                                  ?>

        <div class="row feature-box2">
        </div>
        <!-- field-->


      <div class="row predict">
        <div class="col-sm-12 col-md-12 ">
          <div id="input-canvas"></div>
        </div>
        <p align="center" >
          <section class="button">
              <button class="ladda-button" data-color="blue" data-style="expand-right" data-size="s"><span class="ladda-label">Predict</span></button>
          </section>
        </p>
      </div>
      <script src="js/dist/spin.min.js"></script>
      <script src="js/dist/ladda.min.js"></script>
      <script>
          // Bind normal buttons
          Ladda.bind( 'section:not(.progress-demo) button', { timeout: 2000000 } );
          // Bind progress buttons and simulate loading progress
          Ladda.bind( 'section.progress-demo button', {
              callback: function( instance ) {
                  var progress = 0;
                  var interval = setInterval( function() {
                      progress = Math.min( progress + Math.random() * 0.01, 1 );
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
