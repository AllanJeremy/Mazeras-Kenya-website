<?php
/*This file represents an api/ajax request point for GET and POST requests*/

//POST requests
switch($_POST["action"])
{
  case "sendEmail":#Send an email

  break;
  default:
    echo "{error:'Unknown action'}";
}

//GET requests
switch($_GET["action"])
{
  case "getSomeInfo":#Get some info
    //...
  break;
  default:
    echo "{error:'Unknown action'}";
}
