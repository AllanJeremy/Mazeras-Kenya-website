<?php
 /* needed for header.php & footer.php to work */
$GLOBALS["site_init"] = true;#Site init ~ used to check if the global_variables file has been included

//Global constants*
$GLOBALS["ACTIVE_CLASS"] = "active";
$GLOBALS["company_name"] = "Mazeras company";

//Company contact information
$GLOBALS["company_location"] = "Nairobi, Kenya";
$GLOBALS["company_email"] = "info@mazeraskenya.com";
$GLOBALS["company_phone"] = "(+254)723 777 702";
$GLOBALS["company_hours"] = "8:00am - 5:00pm";

//Global variables
$GLOBALS["header_image_id"] = "landingBg";

//Meta information
$GLOBALS["page_description"] = "Mazeras company is Kenya's leading mazeras miner &amp; retailer. We deliver mazeras to clients all accross the country.";
$GLOBALS["page_keywords"] = "mazeras,african,sandstone,kenya,retailers,sellers,transporters,coast";
$GLOBALS["page_title"] = "Home | ".$GLOBALS["company_name"];
$GLOBALS["site_icon_path"] = "media/icon.png";

//Navbar
$GLOBALS["active_page"] = "home";

//Page Links
$page_extension = ".php";
$GLOBALS["home_link"] = "index".$page_extension;
$GLOBALS["about_link"] = "about".$page_extension;
$GLOBALS["company_link"] = "company".$page_extension;
$GLOBALS["pricing_link"] = "pricing".$page_extension;
$GLOBALS["gallery_link"] = "gallery".$page_extension;
$GLOBALS["contact_link"] = "contact".$page_extension;


//Social media Links
$GLOBALS["facebook_link"] = "https://www.facebook.com";
$GLOBALS["twitter_link"] = "https://www.twitter.com";
$GLOBALS["instagram_link"] = "https://www.instagram.com";

//Global functions
function GetPageTitle()
{
  return ucwords($GLOBALS["active_page"]." | ".$GLOBALS["company_name"]);
}

function GetHeaderImageId()
{
  switch(strtolower($GLOBALS["active_page"]))
  {
    case "home":
    case "index":
      $GLOBALS["header_image_id"] = "landingBg";
    break;
    case "about":
      $GLOBALS["header_image_id"] = "aboutBg";
    break;
    case "company":
      $GLOBALS["header_image_id"] = "companyBg";
    break;
    case "pricing":
      $GLOBALS["header_image_id"] = "pricingBg";
    break;
    case "gallery":
      $GLOBALS["header_image_id"] = "galleryBg";
    break;
    case "contact":
      $GLOBALS["header_image_id"] = "contactBg";
    break;
    default:
      $GLOBALS["header_image_id"] = "landingBg";
  }
  return $GLOBALS["header_image_id"];
}

function ShowPageUnderConstruction()
{
?>
<div class="half-height container-fluid d-flex justify-content-center align-items-center">
  <h1 class="text-center display-4">This page is under construction</h1>
</div>
<?php
}
