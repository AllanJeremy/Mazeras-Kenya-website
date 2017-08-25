<?php
  require_once("./templates/global_variables.php");#Get the required global variables
  $GLOBALS["active_page"] = "about";#Set the active page
  $GLOBALS["page_title"] = "About Mazeras | ".ucwords($GLOBALS["company_name"]);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="keywords" content="<?php echo  $GLOBALS["page_keywords"];?>">
    <meta name="description" content="<?php echo  $GLOBALS["page_description"];?>">
    <meta name="og:description" content="<?php echo  $GLOBALS["page_description"];?>">

    <title><?php echo GetPageTitle();?></title>
    <link rel="shortcut icon" type="image/x-icon" href="./<?php echo  $GLOBALS["site_icon_path"];?>"/>

    <link rel="stylesheet dns-prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="./css/main.css">
  </head>
  <body>
    <!-- Header image -->
    <div class="container-fluid header-image qtr-height" id="<?php echo GetHeaderImageId();?>">
      <?php include_once("./templates/header.php");?>
      <!-- Header content -->
      <div class="header-content text-white text-center">
        <h1>ABOUT MAZERAS</h1>
        <h3 class="lead pt-2 pb-2">Mazeras is a premium African sandstone</h3>
      </div>
    </div>

    <main style="overflow-x:hidden;">
      <!-- Sample content -->
      <div class="container mt-4 mb-4">
        <div class="col-md-8  ml-auto mr-auto align-items-center d-flex flex-column justify-content-center">
          <p class="text-lg">
            Some information about mazeras. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="./about" class="btn btn-lg btn-primary mt-2 mb-4">VIEW USE CASES</a>
        </div>
      </div>

      <!-- Item 1 -->
      <div class="row mt-4">
        <div class="col-md-6 float-md-right">
          <img src="media/about.jpeg" alt="" class="img-fluid w-100">
        </div>
        <div class="col-md-6 d-md-flex flex-md-column justify-content-md-center pl-4 pr-4">
          <h2 class="text-center text-md-left pt-sm-4">Roofing panels</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="row mb-4">
        <div class="col-md-6">
          <img src="media/use_case_1.jpeg" alt="" class="img-fluid w-100">
        </div>
        <div class="col-md-6 d-md-flex flex-md-column justify-content-md-center pl-4 pr-4">
          <h2 class="text-center text-md-left pt-sm-4">Floor tiles</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
      </div>

    </main>

    <!-- Footer -->
    <?php include_once("./templates/footer.php");?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
