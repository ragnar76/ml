<?php
  $page = '';

  if(isset($_REQUEST["page"]))
  {
    $page = $_REQUEST["page"];
  }
  
  switch($page)
  {
    case "subscribe":
      require_once("subscribe.inc.php");
      break; 
    case "unsubscribe":
      require_once("unsubscribe.inc.php");
      break;
    case "list":
      $output = shell_exec("ls");
      echo $output;
      break;
    default:
      include("index.inc.php");
  }
?>
