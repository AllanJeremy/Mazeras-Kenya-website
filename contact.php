<?php
  require_once("./templates/global_variables.php");#Get the required global variables
  $GLOBALS["active_page"] = "contact";#Set the active page
  $GLOBALS["page_title"] = "Contact | ".ucwords($GLOBALS["company_name"]);
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
      <div class="header-content text-white text-center pb-4">
        <h1 class="pb-2">CONTACT US</h1>
        <h3 class="lead pb-4">Send us a message or give us a call</h3>
      </div>
    </div>

    <main style="overflow-x:hidden;">

      <!-- <?php ShowPageUnderConstruction() ?> -->
      <div class="container">
        <div class="row mt-4 mb-4 qtr-height">
          <div class="col d-flex flex-column justify-content-center align-items-center" style="line-height:2;">
            <h2 class="text-secondary">BASIC</h2>
            <ul class="list-unstyled lead">
              <li><i class="fa fa-map-marker"></i> <?php echo $GLOBALS["company_location"];?> </li>
              <li><i class="fa fa-phone"></i> <?php echo $GLOBALS["company_phone"];?> </li>
              <li><i class="fa fa-envelope"></i> <?php echo $GLOBALS["company_email"];?> </li>
              <li><i class="fa fa-clock-o"></i> <?php echo $GLOBALS["company_hours"];?> </li>
            </ul>

            <h2 class="text-secondary pt-2">CONNECT</h2>
            <ul class="list-inline mt-2">
              <li class="list-inline-item">
                <a href="<?php echo  $GLOBALS["facebook_link"];?>" class="social-link facebook-link fa fa-facebook-official fa-3x" style=""></a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo  $GLOBALS["twitter_link"];?>" class="social-link twitter-link fa fa-twitter-square fa-3x"></a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo  $GLOBALS["instagram_link"];?>" class="social-link instagram-link fa fa-instagram fa-3x"></a>
              </li>
            </ul>
          </div>
          <div class="col h-75">
            <div class="container-fluid">
              <h2 class="text-center text-secondary pt-2">SEND US A MESSAGE</h2>
              <form action="" method="post" class="mt-4">
                <div class="form-group input-group col-md-12">
                  <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
                  <input type="text" class="form-control" placeholder="Full name" id="contact_name" title="Full name">
                  <div class="input-group-addon">
                    <small class="text-secondary ">
                      <span class="d-none d-md-inline">Required</span>
                      <span class="d-inline d-md-none fa fa-asterisk"></span>
                    </small>
                  </div>
                </div>
                <div class="form-group input-group col-md-12">
                  <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                  <input type="email" class="form-control"  placeholder="Email address"id="contact_email" title="Email address">
                  <div class="input-group-addon">
                    <small class="text-secondary ">
                      <span class="d-none d-md-inline">Required</span>
                      <span class="d-inline d-md-none fa fa-asterisk"></span>
                    </small>
                  </div>
                </div>
                <div class="form-group input-group col-md-12">
                  <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                  <input type="text" class="form-control" id="contact_phone"  placeholder="Phone number" title="Phone number">
                  <div class="input-group-addon d-none d-md-inline border-right-1">
                    <small class="text-secondary">Optional</small>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label for="contact_message">Message</label>
                  <small class="text-secondary">(Required)</small>
                  <textarea class="form-control" id="contact_message" rows="3" placeholder="Your message goes here..." title="Your message to us" ></textarea>
                </div>
                <div class="form-group col-12 text-center">
                  <div class="mb-4">
                    <small class="text-secondary"><span class="text-primary">*</span> Ensure you have filled in all required fields before sending the message</small>
                  </div>
                  <a href="" class="btn btn-primary" id="btnSendContactMessage">SEND MESSAGE</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <?php include_once("./templates/footer.php");?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
