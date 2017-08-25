<?php
  //Include global variables if they haven't been included yet
  if(!isset($GLOBALS["site_init"]))
  {
    require_once("./global_variables.php");
  }
  //Active classes
  $home_active = $about_active = $company_active = $pricing_active = $gallery_active = $contact_active = "";
  switch(strtolower($GLOBALS["active_page"]))
  {
    case "home":
    case "index":
      $home_active = $GLOBALS["ACTIVE_CLASS"];
    break;
    case "about":
      $about_active = $GLOBALS["ACTIVE_CLASS"];
    break;
    case "company":
      $company_active = $GLOBALS["ACTIVE_CLASS"];
    break;
    case "pricing":
      $pricing_active = $GLOBALS["ACTIVE_CLASS"];
    break;
    case "gallery":
      $gallery_active = $GLOBALS["ACTIVE_CLASS"];
    break;
    case "contact":
      $contact_active = $GLOBALS["ACTIVE_CLASS"];
    break;
    default:
      $home_active = $GLOBALS["ACTIVE_CLASS"];
  }
?>
<header class="">
  <nav class="navbar navbar-light navbar-expand-lg pt-2 pb-2">
    <a href="<?php echo  $GLOBALS["home_link"];?>" class="navbar-brand"><?php echo ucwords($GLOBALS["company_name"]);?></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#siteNav" aria-controls="siteNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="siteNav">
      <ul class="navbar-nav nav mr-md-5">
        <li class="nav-item <?php echo $home_active;?>">
          <a class="nav-link pl-md-4 pr-md-4" href="<?php echo  $GLOBALS["home_link"];?>">Home</a>
        </li>
        <li class="nav-item <?php echo $about_active;?>">
          <a class="nav-link pl-md-4 pr-md-4" href="<?php echo  $GLOBALS["about_link"];?>">About</a>
        </li>
        <li class="nav-item <?php echo $company_active;?>">
          <a class="nav-link pl-md-4 pr-md-4" href="<?php echo  $GLOBALS["company_link"];?>">Company</a>
        </li>
        <!-- <li class="nav-item <?php echo $pricing_active;?>">
          <a class="nav-link pl-md-4 pr-md-4" href="<?php echo  $GLOBALS["pricing_link"];?>">Pricing</a>
        </li> -->
        <li class="nav-item <?php echo $gallery_active;?>">
          <a class="nav-link pl-md-4 pr-md-4" href="<?php echo  $GLOBALS["gallery_link"];?>">Gallery</a>
        </li>
        <li class="nav-item <?php echo $contact_active;?>">
          <a class="nav-link pl-md-4 pr-md-4" href="<?php echo  $GLOBALS["contact_link"];?>">Contact</a>
        </li>
        <!-- <li class="nav-item pl-md-4">
          <a class="btn btn-outline-success" href="<?php echo  $GLOBALS["pricing_link"];?>">Order Now</a>
        </li> -->
      </ul>
    </div>
  </nav>
</header>
