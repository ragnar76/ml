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
      echo "unsubscribe";
      break;
    case "list":
      $output = shell_exec("ls");
      echo $output;
      break;
    default:
      include("index.inc.php");
  }
?>
