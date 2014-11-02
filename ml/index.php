<?php
  if(isset($_REQUEST["page"]))
  {
    $page = $_REQUEST["page"];
  }
  
  switch($page)
  {
    case "subscribe":
      echo "subscribe";
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
