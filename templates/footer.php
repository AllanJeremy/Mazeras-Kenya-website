<?php
//Include global variables if they haven't been included yet
if(!isset($GLOBALS["site_init"]))
{
  require_once("./global_variables.php");
}
?>
<footer class="container-fluid footer pt-2 mt-2 bg-info">
  <div class="container">
    <ul class="nav pb-2 col-12 d-flex flex-md-row align-items-center justify-content-center">
      <li class="nav-item pl-sm-0 pl-md-2">
        <a href="<?php echo  $GLOBALS["home_link"];?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item pl-lg-2">
        <a href="<?php echo  $GLOBALS["about_link"];?>" class="nav-link">About</a>
      </li>
      <li class="nav-item pl-lg-2">
        <a href="<?php echo  $GLOBALS["company_link"];?>" class="nav-link">Company</a>
      </li>
      <li class="nav-item pl-lg-2">
        <a href="<?php echo  $GLOBALS["pricing_link"];?>" class="nav-link">Pricing</a>
      </li>
      <li class="nav-item pl-lg-2">
        <a href="<?php echo  $GLOBALS["gallery_link"];?>" class="nav-link">Gallery</a>
      </li>
      <li class="nav-item pl-lg-2">
        <a href="<?php echo  $GLOBALS["contact_link"];?>" class="nav-link">Contact</a>
      </li>
    </ul>
  </div>
  <div class="container d-md-flex pb-4">
    <div class="col-sm-12 col-md-4 pb-sm-2">
      <h3>Some title</h3>
      <p>Some basic information about the mazeras company</p>
      <a href="<?php echo  $GLOBALS["about_link"];?>" class="btn btn-outline-primary mb-sm-2">MORE ABOUT US</a>
    </div>
    <div class="col-sm-12 col-md-4">
      <h3>Contact information</h3>
      <ul class="list-unstyled">
        <li><i class="fa fa-map-marker"></i> <?php echo $GLOBALS["company_location"];?> </li>
        <li><i class="fa fa-phone"></i> <?php echo $GLOBALS["company_phone"];?> </li>
        <li><i class="fa fa-envelope"></i> <?php echo $GLOBALS["company_email"];?> </li>
        <li><i class="fa fa-clock-o"></i> <?php echo $GLOBALS["company_hours"];?> </li>
      </ul>
    </div>
    <div class="col-md-4 d-flex flex-column align-items-center">
      <h3>Social media</h3>
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
  </div>
  <div class="container-fluid pt-2 pb-2">
    <p class="text-center">&copy; <?php echo date('Y');?> - Company site developed by <a href="http://www.allanjeremy.com">Allan Jeremy</a></p>
  </div>
</footer>
