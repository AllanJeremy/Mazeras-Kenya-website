<?php
  require_once("./templates/global_variables.php");#Get the required global variables
  $GLOBALS["active_page"] = "home";#Set the active page
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
    <div class="container-fluid header-image half-height" id="<?php echo GetHeaderImageId();?>">
      <?php include_once("./templates/header.php");?>
      <!-- Header content -->
      <div class="header-content text-white text-center">
        <h1>WELCOME TO <?php echo strtoupper($GLOBALS["company_name"]);?></h1>
        <h3 class="lead pt-2 pb-2">We sell mazeras and stuff</h3>
        <div class="mt-4 mb-1">
          <a href="<?php echo  $GLOBALS["company_link"];?>" class="btn btn-lg btn-outline-light mr-2 mr-md-4">ABOUT US </a>
          <a href="<?php echo  $GLOBALS["pricing_link"];?>" class="btn btn-lg btn-success">GET QUOTE</a>
        </div>
      </div>
    </div>

    <main style="overflow-x:hidden;">
      <!-- What are mazeras -->
      <div class="container mt-4 mb-4">
        <div class="col-md-8  ml-auto mr-auto align-items-center d-flex flex-column justify-content-center">
          <h1 class="text-center">What are mazeras</h1>
          <p class="lg-text">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate provident, similique sunt in culpa qui officia deserunt
          </p>
          <a href="<?php echo  $GLOBALS["about_link"]; ?>" class="btn btn-lg btn-primary mt-2">Learn More</a>
        </div>
      </div>
      <!-- Use cases -->
      <div class="container-fluid mt-4 pt-2 pb-2">
        <h1 class="text-center pb-2">Use cases</h1>
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <!-- <li data-target="#carouselIndicators" data-slide-to="2"></li> -->
          </ol>
          <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="carousel-item mh-75 active">
              <img class="d-block w-100 img-fluid" src="./media/use_case_1.jpeg" alt="Tiles using mazeras stones" >
              <div class="carousel-caption d-none d-md-block">
                <h3>Use case 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>

            <!-- Item 2 -->
            <div class="carousel-item mh-75">
              <img class="d-block w-100 img-fluid" src="./media/use_case_2.jpeg" alt="Tiles using mazeras stones" >
              <div class="carousel-caption d-none d-md-block">
                <h3>Use case 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="fa fa-angle-left fa-3x" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="fa fa-angle-right fa-3x" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <?php include_once("./templates/footer.php");?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
