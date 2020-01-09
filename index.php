<?php require('./utils/array_utils.php'); ?>
<?php //require('./utils/db_connector.php'); ?>
<?php 
  // check 'action' from get params
  if(!array_key_exists("action", $_GET)){
    header("Location: ?action=rg1");
    exit(0);
  }
  // get action value from action key in $_GET
//   $action = $_GET['action'];
//   if(array_key_exists("rg", $_GET)){$rg = $_GET['rg'];}
  
?>
<?php require('./partials/header.php'); ?>
<?php 
  // filter only php extension
  $filter_file_name = array_filter(scandir("./"), "filter_php_file");

  $page_php_path = "{$action}.php";
  if(in_array($page_php_path, $filter_file_name, true))
    include($page_php_path);
  else
    include("404.php");
  
  // include essentails scripts 
  //require('./partials/pop_menu.php');


  require("./partials/scripts.php");

  // include script control withit page
  $page_script_path = "scripts/{$action}.js";
  if(file_exists($page_script_path)){
    echo "<script>";
    include($page_script_path);
    echo "</script>";
  }
  
?>
<?php require("./partials/footer.php"); ?>