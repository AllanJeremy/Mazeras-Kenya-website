<?php
  require_once("./templates/global_variables.php");#Get the required global variables
  $GLOBALS["active_page"] = "pricing";#Set the active page
  $GLOBALS["page_title"] = "Pricing | ".ucwords($GLOBALS["company_name"]);
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
        <h1>YOU ASK, WE DELIVER</h1>
        <h3 class="lead pt-2 pb-2">We have some of the most competitive prices around</h3>
      </div>
    </div>

    <main style="overflow-x:hidden;">
      <?php ShowPageUnderConstruction() ?>
    </main>

    <!-- Footer -->
    <?php include_once("./templates/footer.php");?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
