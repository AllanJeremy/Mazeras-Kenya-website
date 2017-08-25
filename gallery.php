<?php
  require_once("./templates/global_variables.php");#Get the required global variables
  $GLOBALS["active_page"] = "gallery";#Set the active page
  $GLOBALS["page_title"] = "Gallery | ".ucwords($GLOBALS["company_name"]);
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

    <script src="./js/jquery.min.js"></script>
    <link rel="stylesheet prefetch" href="./css/prettyPhoto.css">
    <script src="./js/jquery.prettyPhoto.js"></script>
  </head>
  <body>
    <!-- Header image -->
    <div class="container-fluid header-image qtr-height" id="<?php echo GetHeaderImageId();?>">
      <?php include_once("./templates/header.php");?>
      <!-- Header content -->
      <div class="header-content text-white text-center pb-4">
        <h1>GALLERY</h1>
        <h3 class="lead pt-2 pb-2">A collection of mazeras related pictures</h3>
      </div>
    </div>

    <main style="overflow-x:hidden;">
      <div class="container-fluid mt-4 mb-4 text-center">
        <!-- Gallery items -->
        <div class="d-inline-block mt-2 mt-md-4 ml-2 card col-5 col-sm-6 col-md-4 col-lg-3 gallery-item pl-2 pr-2">
          <a href="media/original/gallery_1.jpeg" rel="prettyPhoto[pp_gallery]">
            <img src="media/original/gallery_1.jpeg " alt="" class="img-fluid pt-2 pb-2">
          </a>
        </div>
        <!-- Gallery item -->
        <div class="d-inline-block mt-2 mt-md-4 ml-2 card col-5 col-sm-6 col-md-4 col-lg-3 gallery-item pl-2 pr-2">
          <a href="media/original/gallery_2.jpeg" rel="prettyPhoto[pp_gallery]">
            <img src="media/original/gallery_2.jpeg " alt="" class="img-fluid pt-2 pb-2">
          </a>
        </div>
        <!-- Gallery item -->
        <div class="d-inline-block mt-2 mt-md-4 ml-2 card col-5 col-sm-6 col-md-4 col-lg-3 gallery-item pl-2 pr-2">
          <a href="media/original/gallery_3.jpeg" rel="prettyPhoto[pp_gallery]">
            <img src="media/original/gallery_3.jpeg" alt="" class="img-fluid pt-2 pb-2">
          </a>
        </div>
        <!-- Gallery item -->
        <div class="d-inline-block mt-2 mt-md-4 ml-2 card col-5 col-sm-6 col-md-4 col-lg-3 gallery-item pl-2 pr-2">
          <a href="media/original/gallery_2.jpeg" rel="prettyPhoto[pp_gallery]">
            <img src="media/original/gallery_2.jpeg " alt="" class="img-fluid pt-2 pb-2">
          </a>
        </div>
        <!-- Gallery item -->
        <div class="d-inline-block mt-2 mt-md-4 ml-2 card col-5 col-sm-6 col-md-4 col-lg-3 gallery-item pl-2 pr-2">
          <a href="media/original/gallery_3.jpeg" rel="prettyPhoto[pp_gallery]">
            <img src="media/original/gallery_3.jpeg" alt="" class="img-fluid pt-2 pb-2">
          </a>
        </div>
        <!-- Gallery item -->
        <div class="d-inline-block mt-2 mt-md-4 ml-2 card col-5 col-sm-6 col-md-4 col-lg-3 gallery-item pl-2 pr-2">
          <a href="media/original/gallery_1.jpeg" rel="prettyPhoto[pp_gallery]">
            <img src="media/original/gallery_1.jpeg " alt="" class="img-fluid pt-2 pb-2">
          </a>
        </div>
      </div>

    </main>

    <!-- Footer -->
    <?php include_once("./templates/footer.php");?>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto({
          theme:"light_square",
          social_tools:false
        });
      });
    </script>

    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
