<?php
if (isset($_POST['att11'])) $var1 = $_POST['att11'];
if (isset($_POST['att21'])) $var2 = $_POST['att21'];
if (isset($_POST['att31'])) $var3 = $_POST['att31'];
if (isset($_POST['att41'])) $var4 = $_POST['att41'];
if (isset($_POST['att51'])) $var5 = $_POST['att51'];

if (isset($_POST['att12'])) $var6 = $_POST['att12'];
if (isset($_POST['att22'])) $var7 = $_POST['att22'];
if (isset($_POST['att32'])) $var8 = $_POST['att32'];
if (isset($_POST['att42'])) $var9 = $_POST['att42'];
if (isset($_POST['att52'])) $var10 = $_POST['att52'];

if (isset($_POST['att13'])) $var11 = $_POST['att13'];
if (isset($_POST['att23'])) $var12 = $_POST['att23'];
if (isset($_POST['att33'])) $var13 = $_POST['att33'];
if (isset($_POST['att43'])) $var14 = $_POST['att43'];
if (isset($_POST['att53'])) $var15 = $_POST['att53'];

if (isset($_POST['att14'])) $var16 = $_POST['att14'];
if (isset($_POST['att24'])) $var17 = $_POST['att24'];
if (isset($_POST['att34'])) $var18 = $_POST['att34'];
if (isset($_POST['att44'])) $var19 = $_POST['att44'];
if (isset($_POST['att54'])) $var20 = $_POST['att54'];

$varLeft = $_POST['left'];
$varRight = $_POST['right'];
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

    <!-- CYTOSCAPE
    ============================================================-->
    <script type="text/javascript" src="js/cy/cytoscape.js"></script>

    <!-- EXPORT
    ============================================================-->
    <script type="text/javascript" src="js/h2c/html2canvas.js"></script>


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
  <!--    ==================================================-->
  <div class="row">

      <div class="row feature-box">
          <div class="cnt-title col-sm-12 col-md-12">
           <h1>Jamu Webserver</h1>
            <span>Search for Plant - Compound - Protein - Disease Connectivity.</span><br><br>
          </div>
      </div>


      <!-- 1
      ============================================================-->


  </div>
</div>
<!-- /.Row View -->
<div class="container">
<?php
include 'connect.php';

$arrayCY = array();

//Untuk Compound
$isExistPlant = array();
for ($i = 0;$i<52000;$i++) $isExistPlant[] = 0;
$Yplant = 0;

//Untuk Plant
$isExistCompound = array();
for ($i = 0;$i<52000;$i++) $isExistCompound[] = 0;
$Ycompound = 0;

//Untuk Disease
$isExistProtein = array();
$Yprotein = 0;

//Untuk Protein
$isExistDisease = array();
for ($i = 0;$i<10000;$i++) $isExistDisease[] = 0;
$Ydisease = 0;

/////////////////////////////////////////////
///////////////////////P.L.A.N.T/////////////////////////////////////////
///////////////////////////////////////////////////////
if ($varLeft == "plant") {
  if ($var1){
      $plant1 = mysqli_query($link, "SELECT distinct id, cid, nama FROM tc_view WHERE nama_latin = '$var1'");
      $arrayCOMPOUND = array();
      while($row = mysqli_fetch_assoc($plant1)) {
        $arrayCOMPOUND[] = $row;
      };

      $data = array(
        "id" => "Plant".$arrayCOMPOUND[0]['id'],
        "name" => $var1,
        "score" => 1
      );
      $position = array(
        "x" => 1,
        "y" => 100
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayCOMPOUND); $i++)   {
            $aidi = $arrayCOMPOUND[$i]['cid'];
            $aidi = intval(   substr($aidi,1,strlen($aidi)-1)    );
            if ( $isExistCompound[$aidi] == 0 ) {
                  $Ycompound = $Ycompound + 1;
                  $data = array(
                    "id" => "Compound".$arrayCOMPOUND[$i]['cid'],
                    "name" => $arrayCOMPOUND[$i]['nama'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 300,
                    "y" => 100 * ($Ycompound)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistCompound[$aidi] = 1;
            }

            $data = array(
              "source" => "Plant".$arrayCOMPOUND[0]['id'],
              "target" => "Compound".$arrayCOMPOUND[$i]['cid'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

  if ($var2){
      $plant2 = mysqli_query($link, "SELECT distinct id, cid, nama FROM tc_view WHERE nama_latin = '$var2'");
      $arrayCOMPOUND = array();
      while($row = mysqli_fetch_assoc($plant2)) {
        $arrayCOMPOUND[] = $row;
      };
      $data = array(
        "id" => "Plant".$arrayCOMPOUND[0]['id'],
        "name" => $var2,
        "score" => 1
      );
      $position = array(
        "x" => 1,
        "y" => 200
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayCOMPOUND); $i++)   {
            $aidi = $arrayCOMPOUND[$i]['cid'];
            $aidi = intval(   substr($aidi,1,strlen($aidi)-1)    );
            if ( $isExistCompound[$aidi] == 0 ) {
                  $Ycompound = $Ycompound + 1;
                  $data = array(
                    "id" => "Compound".$arrayCOMPOUND[$i]['cid'],
                    "name" => $arrayCOMPOUND[$i]['nama'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 300,
                    "y" => 100 * ($Ycompound)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistCompound[$aidi] = 1;
            }

            $data = array(
              "source" => "Plant".$arrayCOMPOUND[0]['id'],
              "target" => "Compound".$arrayCOMPOUND[$i]['cid'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

  if ($var3){
      $plant3 = mysqli_query($link, "SELECT distinct id, cid, nama FROM tc_view WHERE nama_latin = '$var3'");
      $arrayCOMPOUND = array();
      while($row = mysqli_fetch_assoc($plant3)) {
        $arrayCOMPOUND[] = $row;
      };

      $data = array(
        "id" => "Plant".$arrayCOMPOUND[0]['id'],
        "name" => $var3,
        "score" => 1
      );
      $position = array(
        "x" => 1,
        "y" => 300
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayCOMPOUND); $i++)   {
            $aidi = $arrayCOMPOUND[$i]['cid'];
            $aidi = intval(   substr($aidi,1,strlen($aidi)-1)    );
            if ( $isExistCompound[$aidi] == 0 ) {
                  $Ycompound = $Ycompound + 1;
                  $data = array(
                    "id" => "Compound".$arrayCOMPOUND[$i]['cid'],
                    "name" => $arrayCOMPOUND[$i]['nama'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 300,
                    "y" => 100 * ($Ycompound)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistCompound[$aidi] = 1;
            }

            $data = array(
              "source" => "Plant".$arrayCOMPOUND[0]['id'],
              "target" => "Compound".$arrayCOMPOUND[$i]['cid'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

  if ($var4){
      $plant4 = mysqli_query($link, "SELECT distinct id, cid, nama FROM tc_view WHERE nama_latin = '$var4'");
      $arrayCOMPOUND = array();
      while($row = mysqli_fetch_assoc($plant4)) {
        $arrayCOMPOUND[] = $row;
      };
      $data = array(
        "id" => "Plant".$arrayCOMPOUND[0]['id'],
        "name" => $var4,
        "score" => 1
      );
      $position = array(
        "x" => 1,
        "y" => 400
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayCOMPOUND); $i++)   {
            $aidi = $arrayCOMPOUND[$i]['cid'];
            $aidi = intval(   substr($aidi,1,strlen($aidi)-1)    );
            if ( $isExistCompound[$aidi] == 0 ) {
                  $Ycompound = $Ycompound + 1;
                  $data = array(
                    "id" => "Compound".$arrayCOMPOUND[$i]['cid'],
                    "name" => $arrayCOMPOUND[$i]['nama'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 300,
                    "y" => 100 * ($Ycompound)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistCompound[$aidi] = 1;
            }

            $data = array(
              "source" => "Plant".$arrayCOMPOUND[0]['id'],
              "target" => "Compound".$arrayCOMPOUND[$i]['cid'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

  if ($var5){
      $plant5 = mysqli_query($link, "SELECT distinct id, cid, nama FROM tc_view WHERE nama_latin = '$var5'");
      $arrayCOMPOUND = array();
      while($row = mysqli_fetch_assoc($plant5)) {
        $arrayCOMPOUND[] = $row;
      };
      $data = array(
        "id" => "Plant".$arrayCOMPOUND[0]['id'],
        "name" => $var5,
        "score" => 1
      );
      $position = array(
        "x" => 1,
        "y" => 500
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayCOMPOUND); $i++)   {
            $aidi = $arrayCOMPOUND[$i]['cid'];
            $aidi = intval(   substr($aidi,1,strlen($aidi)-1)    );
            if ( $isExistCompound[$aidi] == 0 ) {
                  $Ycompound = $Ycompound + 1;
                  $data = array(
                    "id" => "Compound".$arrayCOMPOUND[$i]['cid'],
                    "name" => $arrayCOMPOUND[$i]['nama'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 300,
                    "y" => 100 * ($Ycompound)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistCompound[$aidi] = 1;
            }

            $data = array(
              "source" => "Plant".$arrayCOMPOUND[0]['id'],
              "target" => "Compound".$arrayCOMPOUND[$i]['cid'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

};

/////////////////////////////////////////////
///////////////////////C.O.M.P.O.U.N.D/////////////////////////////////////////
///////////////////////////////////////////////////////
if ($varLeft == "compound") {
  if ($var6){
      $compound1 = mysqli_query($link, "SELECT distinct id, cid, nama_latin FROM tc_view WHERE nama = '$var6'");
      $arrayPLANT = array();
      while($row = mysqli_fetch_assoc($compound1)) {
        $arrayPLANT[] = $row;
      };
      $data = array(
        "id" => "Compound".$arrayPLANT[0]['cid'],
        "name" => $var6,
        "score" => 1
      );
      $position = array(
        "x" => 300,
        "y" => 100
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayPLANT); $i++)   {
            $aidi = $arrayPLANT[$i]['id'];
            if ( $isExistPlant[$aidi] == 0 ) {
                  $Yplant = $Yplant + 1;
                  $data = array(
                    "id" => "Plant".$arrayPLANT[$i]['id'],
                    "name" => $arrayPLANT[$i]['nama_latin'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 1,
                    "y" => 100 * ($Yplant)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistPlant[$aidi] = 1;
              }

              $data = array(
                "source" => "Compound".$arrayPLANT[0]['cid'],
                "target" => "Plant".$arrayPLANT[$i]['id'],
                "weight" => 0.5
              );
              $arrayCY2 = array(
                "data" => $data,
                "locked"=> true
              );
              $arrayCY[] = $arrayCY2;
      };
  };

  if ($var7){
      $compound2 = mysqli_query($link, "SELECT distinct id, cid, nama_latin FROM tc_view WHERE nama = '$var7'");
      $arrayPLANT = array();
      while($row = mysqli_fetch_assoc($compound2)) {
        $arrayPLANT[] = $row;
      };
      $data = array(
        "id" => "Compound".$arrayPLANT[0]['cid'],
        "name" => $var7,
        "score" => 1
      );
      $position = array(
        "x" => 300,
        "y" => 200
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayPLANT); $i++)   {
            $aidi = $arrayPLANT[$i]['id'];
            if ( $isExistPlant[$aidi] == 0 ) {
                  $Yplant = $Yplant + 1;
                  $data = array(
                    "id" => "Plant".$arrayPLANT[$i]['id'],
                    "name" => $arrayPLANT[$i]['nama_latin'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 1,
                    "y" => 100 * ($Yplant)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistPlant[$aidi] = 1;
            }

            $data = array(
              "source" => "Compound".$arrayPLANT[0]['cid'],
              "target" => "Plant".$arrayPLANT[$i]['id'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

  if ($var8){
      $compound3 = mysqli_query($link, "SELECT distinct id, cid, nama_latin FROM tc_view WHERE nama = '$var8'");
      $arrayPLANT = array();
      while($row = mysqli_fetch_assoc($compound3)) {
        $arrayPLANT[] = $row;
      };
      $data = array(
        "id" => "Compound".$arrayPLANT[0]['cid'],
        "name" => $var8,
        "score" => 1
      );
      $position = array(
        "x" => 300,
        "y" => 300
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayPLANT); $i++)   {
            $aidi = $arrayPLANT[$i]['id'];
            if ( $isExistPlant[$aidi] == 0 ) {
                  $Yplant = $Yplant + 1;
                  $data = array(
                    "id" => "Plant".$arrayPLANT[$i]['id'],
                    "name" => $arrayPLANT[$i]['nama_latin'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 1,
                    "y" => 100 * ($Yplant)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistPlant[$aidi] = 1;
              }

              $data = array(
                "source" => "Compound".$arrayPLANT[0]['cid'],
                "target" => "Plant".$arrayPLANT[$i]['id'],
                "weight" => 0.5
              );
              $arrayCY2 = array(
                "data" => $data,
                "locked"=> true
              );
              $arrayCY[] = $arrayCY2;
      };
  };

  if ($var9){
      $compound4 = mysqli_query($link, "SELECT distinct id, cid, nama_latin FROM tc_view WHERE nama = '$var9'");
      $arrayPLANT = array();
      while($row = mysqli_fetch_assoc($compound4)) {
        $arrayPLANT[] = $row;
      };
      $data = array(
        "id" => "Compound".$arrayPLANT[0]['cid'],
        "name" => $var9,
        "score" => 1
      );
      $position = array(
        "x" => 300,
        "y" => 400
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayPLANT); $i++)   {
            $aidi = $arrayPLANT[$i]['id'];
            if ( $isExistPlant[$aidi] == 0 ) {
                  $Yplant = $Yplant + 1;
                  $data = array(
                    "id" => "Plant".$arrayPLANT[$i]['id'],
                    "name" => $arrayPLANT[$i]['nama_latin'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 1,
                    "y" => 100 * ($Yplant)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistPlant[$aidi] = 1;
            }

            $data = array(
              "source" => "Compound".$arrayPLANT[0]['cid'],
              "target" => "Plant".$arrayPLANT[$i]['id'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };


  if ($var10){
      $compound5 = mysqli_query($link, "SELECT distinct id, cid, nama_latin FROM tc_view WHERE nama = '$var10'");
      $arrayPLANT = array();
      while($row = mysqli_fetch_assoc($compound5)) {
        $arrayPLANT[] = $row;
      };
      $data = array(
        "id" => "Compound".$arrayPLANT[0]['cid'],
        "name" => $var10,
        "score" => 1
      );
      $position = array(
        "x" => 300,
        "y" => 500
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayPLANT); $i++)   {
            $aidi = $arrayPLANT[$i]['id'];
            if ( $isExistPlant[$aidi] == 0 ) {
                  $Yplant = $Yplant + 1;
                  $data = array(
                    "id" => "Plant".$arrayPLANT[$i]['id'],
                    "name" => $arrayPLANT[$i]['nama_latin'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 1,
                    "y" => 100 * ($Yplant)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistPlant[$aidi] = 1;
            }

            $data = array(
              "source" => "Compound".$arrayPLANT[0]['cid'],
              "target" => "Plant".$arrayPLANT[$i]['id'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

};

/////////////////////////////////////////////
////////////////////////P.R.O.T.E.I.N/////////////////////////////////////////
///////////////////////////////////////////////////////
if ($varRight == "protein") {
  if ($var11){
      $protein1 = mysqli_query($link, "SELECT distinct disease_id, gi_number, disease_name FROM pd_view WHERE protein_name = '$var11'");
      $arrayDISEASE = array();
      while($row = mysqli_fetch_assoc($protein1)) {
        $arrayDISEASE[] = $row;
      };
      $data = array(
        "id" => "Protein".$arrayDISEASE[0]['gi_number'],
        "name" => $var11,
        "score" => 1
      );
      $position = array(
        "x" => 600,
        "y" => 100
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayDISEASE); $i++)   {
            $aidi = $arrayDISEASE[$i]['disease_id'];
            $aidi = intval(  $aidi  );
            if ( $isExistDisease[$aidi] == 0 ) {
                  $Ydisease = $Ydisease + 1;
                  $data = array(
                    "id" => "Disease".$arrayDISEASE[$i]['disease_id'],
                    "name" => $arrayDISEASE[$i]['disease_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 900,
                    "y" => 100 * ($Ydisease)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistDisease[$aidi] = 1;
            }
            $data = array(
              "source" => "Protein".$arrayDISEASE[0]['gi_number'],
              "target" => "Disease".$arrayDISEASE[$i]['disease_id'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

  if ($var12){
      $protein2 = mysqli_query($link, "SELECT distinct disease_id, gi_number, disease_name FROM pd_view WHERE protein_name = '$var12'");
      $arrayDISEASE = array();
      while($row = mysqli_fetch_assoc($protein2)) {
        $arrayDISEASE[] = $row;
      };
      $data = array(
        "id" => "Protein".$arrayDISEASE[0]['gi_number'],
        "name" => $var12,
        "score" => 1
      );
      $position = array(
        "x" => 600,
        "y" => 200
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayDISEASE); $i++)   {
            $aidi = $arrayDISEASE[$i]['disease_id'];
            $aidi = intval(   $aidi   );
            if ( $isExistDisease[$aidi] == 0 ) {
                  $Ydisease = $Ydisease + 1;
                  $data = array(
                    "id" => "Disease".$arrayDISEASE[$i]['disease_id'],
                    "name" => $arrayDISEASE[$i]['disease_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 900,
                    "y" => 100 * ($Ydisease)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistDisease[$aidi] = 1;
            }
            $data = array(
              "source" => "Protein".$arrayDISEASE[0]['gi_number'],
              "target" => "Disease".$arrayDISEASE[$i]['disease_id'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };


  if ($var13){
      $protein3 = mysqli_query($link, "SELECT distinct disease_id, gi_number, disease_name FROM pd_view WHERE protein_name = '$var13'");
      $arrayDISEASE = array();
      while($row = mysqli_fetch_assoc($protein3)) {
        $arrayDISEASE[] = $row;
      };
      $data = array(
        "id" => "Protein".$arrayDISEASE[0]['gi_number'],
        "name" => $var13,
        "score" => 1
      );
      $position = array(
        "x" => 600,
        "y" => 300
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;

      for ($i=0; $i<count($arrayDISEASE); $i++)   {
            $aidi = $arrayDISEASE[$i]['disease_id'];
            $aidi = intval(  $aidi  );
            if ( $isExistDisease[$aidi] == 0 ) {
                  $Ydisease = $Ydisease + 1;
                  $data = array(
                    "id" => "Disease".$arrayDISEASE[$i]['disease_id'],
                    "name" => $arrayDISEASE[$i]['disease_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 900,
                    "y" => 100 * ($Ydisease)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistDisease[$aidi] = 1;
            }
            $data = array(
              "source" => "Protein".$arrayDISEASE[0]['gi_number'],
              "target" => "Disease".$arrayDISEASE[$i]['disease_id'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

  if ($var14){
      $protein4 = mysqli_query($link, "SELECT distinct disease_id, gi_number, disease_name FROM pd_view WHERE protein_name = '$var14'");
      $arrayDISEASE = array();
      while($row = mysqli_fetch_assoc($protein4)) {
        $arrayDISEASE[] = $row;
      };
      $data = array(
        "id" => "Protein".$arrayDISEASE[0]['gi_number'],
        "name" => $var14,
        "score" => 1
      );
      $position = array(
        "x" => 600,
        "y" => 400
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;
      for ($i=0; $i<count($arrayDISEASE); $i++)   {
            $aidi = $arrayDISEASE[$i]['disease_id'];
            $aidi = intval(   $aidi   );
            if ( $isExistDisease[$aidi] == 0 ) {
                  $Ydisease = $Ydisease + 1;
                  $data = array(
                    "id" => "Disease".$arrayDISEASE[$i]['disease_id'],
                    "name" => $arrayDISEASE[$i]['disease_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 900,
                    "y" => 100 * ($Ydisease)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistDisease[$aidi] = 1;
            }
            $data = array(
              "source" => "Protein".$arrayDISEASE[0]['gi_number'],
              "target" => "Disease".$arrayDISEASE[$i]['disease_id'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };

  if ($var15){
      $protein5 = mysqli_query($link, "SELECT distinct disease_id, gi_number, disease_name FROM pd_view WHERE protein_name = '$var15'");
      $arrayDISEASE = array();
      while($row = mysqli_fetch_assoc($protein5)) {
        $arrayDISEASE[] = $row;
      };
      $data = array(
        "id" => "Protein".$arrayDISEASE[0]['gi_number'],
        "name" => $var15,
        "score" => 1
      );
      $position = array(
        "x" => 600,
        "y" => 500
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;
      for ($i=0; $i<count($arrayDISEASE); $i++)   {
            $aidi = $arrayDISEASE[$i]['disease_id'];
            $aidi = intval(   $aidi   );
            if ( $isExistDisease[$aidi] == 0 ) {
                  $Ydisease = $Ydisease + 1;
                  $data = array(
                    "id" => "Disease".$arrayDISEASE[$i]['disease_id'],
                    "name" => $arrayDISEASE[$i]['disease_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 900,
                    "y" => 100 * ($Ydisease)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;

                  $isExistDisease[$aidi] = 1;
            }
            $data = array(
              "source" => "Protein".$arrayDISEASE[0]['gi_number'],
              "target" => "Disease".$arrayDISEASE[$i]['disease_id'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
  };


};

/////////////////////////////////////////////
///////////////////////D.I.S.E.A.S.E/////////////////////////////////////////
///////////////////////////////////////////////////////
if ($varRight == "disease") {

    if ($var16){
      $disease1 = mysqli_query($link, "SELECT distinct gi_number, disease_id, protein_name FROM pd_view WHERE disease_name = '$var16'");
      $arrayPROTEIN = array();
      while($row = mysqli_fetch_assoc($disease1)) {
        $arrayPROTEIN[] = $row;
      };
      $data = array(
        "id" => "Disease".$arrayPROTEIN[0]['disease_id'],
        "name" => $var16,
        "score" => 1
      );
      $position = array(
        "x" => 900,
        "y" => 100
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;
      for ($i=0; $i<count($arrayPROTEIN); $i++)   {
            $aidi = $arrayPROTEIN[$i]['gi_number'];
            if ( !isset( $isExistProtein[$aidi]) ) {
                  $Yprotein = $Yprotein + 1;
                  $data = array(
                    "id" => "Protein".$arrayPROTEIN[$i]['gi_number'], //
                    "name" => $arrayPROTEIN[$i]['protein_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 600,
                    "y" => 100 * ($Yprotein)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;
                  $isExistProtein[$aidi] = $Yprotein;
            }
            $data = array(
              "source" => "Disease".$arrayPROTEIN[0]['disease_id'],
              "target" => "Protein".$arrayPROTEIN[$i]['gi_number'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
    };

    if ($var17){
      $disease2 = mysqli_query($link, "SELECT distinct gi_number, disease_id, protein_name FROM pd_view WHERE disease_name = '$var17'");
      $arrayPROTEIN = array();
      while($row = mysqli_fetch_assoc($disease2)) {
        $arrayPROTEIN[] = $row;
      };
      $data = array(
        "id" => "Disease".$arrayPROTEIN[0]['disease_id'],
        "name" => $var17,
        "score" => 1
      );
      $position = array(
        "x" => 900,
        "y" => 200
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;
      for ($i=0; $i<count($arrayPROTEIN); $i++)   {
            $aidi = $arrayPROTEIN[$i]['gi_number'];
            if ( !isset( $isExistProtein[$aidi]) ) {
                  $Yprotein = $Yprotein + 1;
                  $data = array(
                    "id" => "Protein".$arrayPROTEIN[$i]['gi_number'], //
                    "name" => $arrayPROTEIN[$i]['protein_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 600,
                    "y" => 100 * ($Yprotein)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;
                  $isExistProtein[$aidi] = $Yprotein;
            }
            $data = array(
              "source" => "Disease".$arrayPROTEIN[0]['disease_id'],
              "target" => "Protein".$arrayPROTEIN[$i]['gi_number'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
    };

    if ($var18){
      $disease3 = mysqli_query($link, "SELECT distinct gi_number, disease_id, protein_name FROM pd_view WHERE disease_name = '$var18'");
      $arrayPROTEIN = array();
      while($row = mysqli_fetch_assoc($disease3)) {
        $arrayPROTEIN[] = $row;
      };
      $data = array(
        "id" => "Disease".$arrayPROTEIN[0]['disease_id'],
        "name" => $var18,
        "score" => 1
      );
      $position = array(
        "x" => 900,
        "y" => 300
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;
      for ($i=0; $i<count($arrayPROTEIN); $i++)   {
            $aidi = $arrayPROTEIN[$i]['gi_number'];
            if ( !isset( $isExistProtein[$aidi]) ) {
                  $Yprotein = $Yprotein + 1;
                  $data = array(
                    "id" => "Protein".$arrayPROTEIN[$i]['gi_number'], //
                    "name" => $arrayPROTEIN[$i]['protein_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 600,
                    "y" => 100 * ($Yprotein)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;
                  $isExistProtein[$aidi] = $Yprotein;
            }
            $data = array(
              "source" => "Disease".$arrayPROTEIN[0]['disease_id'],
              "target" => "Protein".$arrayPROTEIN[$i]['gi_number'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
    };

    if ($var19){
      $disease4 = mysqli_query($link, "SELECT distinct gi_number, disease_id, protein_name FROM pd_view WHERE disease_name = '$var19'");
      $arrayPROTEIN = array();
      while($row = mysqli_fetch_assoc($disease4)) {
        $arrayPROTEIN[] = $row;
      };
      $data = array(
        "id" => "Disease".$arrayPROTEIN[0]['disease_id'],
        "name" => $var19,
        "score" => 1
      );
      $position = array(
        "x" => 900,
        "y" => 400
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;
      for ($i=0; $i<count($arrayPROTEIN); $i++)   {
            $aidi = $arrayPROTEIN[$i]['gi_number'];
            if ( !isset( $isExistProtein[$aidi]) ) {
                  $Yprotein = $Yprotein + 1;
                  $data = array(
                    "id" => "Protein".$arrayPROTEIN[$i]['gi_number'], //
                    "name" => $arrayPROTEIN[$i]['protein_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 600,
                    "y" => 100 * ($Yprotein)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;
                  $isExistProtein[$aidi] = $Yprotein;
            }
            $data = array(
              "source" => "Disease".$arrayPROTEIN[0]['disease_id'],
              "target" => "Protein".$arrayPROTEIN[$i]['gi_number'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
    };

    if ($var20){
      $disease5 = mysqli_query($link, "SELECT distinct gi_number, disease_id, protein_name FROM pd_view WHERE disease_name = '$var20'");
      $arrayPROTEIN = array();
      while($row = mysqli_fetch_assoc($disease5)) {
        $arrayPROTEIN[] = $row;
      };
      $data = array(
        "id" => "Disease".$arrayPROTEIN[0]['disease_id'],
        "name" => $var20,
        "score" => 1
      );
      $position = array(
        "x" => 900,
        "y" => 500
      );
      $arrayCY1 = array(
        "data" => $data,
        "position" => $position,
        "locked"=> true
      );
      $arrayCY[] = $arrayCY1;
      for ($i=0; $i<count($arrayPROTEIN); $i++)   {
            $aidi = $arrayPROTEIN[$i]['gi_number'];
            if ( !isset( $isExistProtein[$aidi]) ) {
                  $Yprotein = $Yprotein + 1;
                  $data = array(
                    "id" => "Protein".$arrayPROTEIN[$i]['gi_number'], //
                    "name" => $arrayPROTEIN[$i]['protein_name'],
                    "score" => 1
                  );
                  $position = array(
                    "x" => 600,
                    "y" => 100 * ($Yprotein)
                  );
                  $arrayCY1 = array(
                    "data" => $data,
                    "position" => $position,
                    "locked"=> true
                  );
                  $arrayCY[] = $arrayCY1;
                  $isExistProtein[$aidi] = $Yprotein;
              }
            $data = array(
              "source" => "Disease".$arrayPROTEIN[0]['disease_id'],
              "target" => "Protein".$arrayPROTEIN[$i]['gi_number'],
              "weight" => 0.5
            );
            $arrayCY2 = array(
              "data" => $data,
              "locked"=> true
            );
            $arrayCY[] = $arrayCY2;
      };
    };
};

  for ($i = 0; $i<52000 ; $i++){ // loop through all Compound
    foreach ( $isExistProtein as $keyprotein => $value) { // Loop through all Protein
      $compoundI = "C".str_repeat("0",8 - strlen(strval($i+1))).strval($i+1);
      $proteinJ = $keyprotein;
      $queryPLANT = mysqli_query($link, "SELECT distinct cid, gi_number FROM cp_view WHERE cid = '$compoundI' and gi_number = '$proteinJ'");
      //  if (mysqli_num_rows($queryPLANT)!=0) echo $compoundI." and ".$proteinJ." connected ".mysqli_num_rows($queryPLANT)." <br/n>";
      if (mysqli_num_rows($queryPLANT)!=0) {
         $data = array(
           "source" => "Compound".$compoundI,
           "target" => "Protein".$keyprotein,
           "weight" => 0.5
         );
         $arrayCY3 = array(
           "data" => $data,
           "locked"=> true
         );
         $arrayCY[] = $arrayCY3;
      }
    }
  };

?>

<!-- /.CYTOSCAPE -->
  <div id="html-content-holder" onload="render()" style="background-color: #FFFFFF; color: #FFFFFF;  width: 1130px; heighth: 500px;
          padding-left: 25px; padding-top: 5px;">
      <div id="cy"></div>
  </div>
  <br>
  <a id="btn-Convert-Html2Image" href="#" class="ladda-button col-md-offset-5" data-color="blue" data-size="s" type="button"><span class="ladda-label">Save as PNG</span></a>
  <br />

  <script>
  var cy;

  $(function(){ // on dom ready

    cy = cytoscape({
      container: document.getElementById('cy'),

      style: [{"selector":"core","style":{"selection-box-color":"#AAD8FF","selection-box-border-color":"#8BB0D0","selection-box-opacity":"0.5"}},{"selector":"node","style":{"width":"mapData(score, 0, 0.006769776522008331, 20, 60)","height":"mapData(score, 0, 0.006769776522008331, 20, 60)","content":"data(name)","font-size":"12px","text-valign":"center","text-halign":"center","background-color":"#555","text-outline-color":"#555","text-outline-width":"2px","color":"#fff","overlay-padding":"6px","z-index":"10"}},{"selector":"node[?attr]","style":{"shape":"rectangle","background-color":"#aaa","text-outline-color":"#aaa","width":"16px","height":"16px","font-size":"6px","z-index":"1"}},{"selector":"node[?query]","style":{"background-clip":"none","background-fit":"contain"}},{"selector":"node:selected","style":{"border-width":"6px","border-color":"#AAD8FF","border-opacity":"0.5","background-color":"#77828C","text-outline-color":"#77828C"}},{"selector":"edge","style":{"curve-style":"haystack","haystack-radius":"0.5","opacity":"0.4","line-color":"#bbb","width":"mapData(weight, 0, 1, 1, 8)","overlay-padding":"3px"}},{"selector":"node.unhighlighted","style":{"opacity":"0.2"}},{"selector":"edge.unhighlighted","style":{"opacity":"0.05"}},{"selector":".highlighted","style":{"z-index":"999999"}},{"selector":"node.highlighted","style":{"border-width":"6px","border-color":"#AAD8FF","border-opacity":"0.5","background-color":"#394855","text-outline-color":"#394855","shadow-blur":"12px","shadow-color":"#000","shadow-opacity":"0.8","shadow-offset-x":"0px","shadow-offset-y":"4px"}},{"selector":"edge.filtered","style":{"opacity":"0"}},{"selector":"edge[group=\"coexp\"]","style":{"line-color":"#d0b7d5"}},{"selector":"edge[group=\"coloc\"]","style":{"line-color":"#a0b3dc"}},{"selector":"edge[group=\"gi\"]","style":{"line-color":"#90e190"}},{"selector":"edge[group=\"path\"]","style":{"line-color":"#9bd8de"}},{"selector":"edge[group=\"pi\"]","style":{"line-color":"#eaa2a2"}},{"selector":"edge[group=\"predict\"]","style":{"line-color":"#f6c384"}},{"selector":"edge[group=\"spd\"]","style":{"line-color":"#dad4a2"}},{"selector":"edge[group=\"spd_attr\"]","style":{"line-color":"#D0D0D0"}},{"selector":"edge[group=\"reg\"]","style":{"line-color":"#D0D0D0"}},{"selector":"edge[group=\"reg_attr\"]","style":{"line-color":"#D0D0D0"}},{"selector":"edge[group=\"user\"]","style":{"line-color":"#f0ec86"}}],

      elements:  <?php  echo json_encode($arrayCY);  ?> //create graph
      });

  });
  </script>


  <script>
  var element = $("#html-content-holder"); // global variable
  var getCanvas; // global variable

    $("#btn-Convert-Html2Image").on('click', function () {

      html2canvas(element, {
      onrendered: function (canvas) {
             $("#previewImage").append(canvas);
             getCanvas = canvas;
          }
      });

      var imgageData = getCanvas.toDataURL("image/png");
      // Now browser starts downloading it instead of just showing it
      var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
      $("#btn-Convert-Html2Image").attr("download", "graph_predict.png").attr("href", newData);

  });

  </script>

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

</body>
</html>
