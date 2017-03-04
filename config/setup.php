<?php
  //============================================================
  // File   : setup.php
  // Author : Dominic Eaton
  // Created: 8/11/2016
  // Updated: 8/22/2016
  // Purpose: Website Setup File.
  // Usage  : Setup site pages and content.
  //============================================================
  //$file = $_SERVER['DOCUMENT_ROOT']."/../mydb.db";

  # Constants
  DEFINE('D_TEMPLATE', 'template');

  // Include database files
  include('database/Database.php');
  include('database/Table.php');
  include('config/Page.php');
  include('config/Registry.php');

  // Include library of auxilary functions
  include('config/functionLibrary.php');

  // Include website template files
  include(D_TEMPLATE."/content.php");

  // Website title
  $site_title = "FAMU-FSU IEEE";

  // Create and configure pages Database
  $dbName = "database/pages.db";
  $perm = 0777;
  $dbPages = Database::getInstance();
  $dbPages->open_db($dbName, $perm, $error);

  // Create Registries for holding globally used objects
  $PageRegistry = new Registry();
  $page = new Page();



  $data = array('title'=>'title', 'header'=>'header', 'content'=>'content', 'stylesheet'=>'stylesheet');
	$page->bind($data);

  //$page->create(1);
	//$page->store(1);
  //$result = $page->load(1);
  /*
  echo $result['title'] . " ";
  echo $result['header'] . " ";
  echo $result['content'] . " ";
  echo $result['stylesheet'] . " ";
  */

  $directory = 'site/';
  $directory .=scandir($directory);
  while($files[0] == '..' || $files[0] == '.') {
    array_shift($files);
  }
  echo $directory[0];
  /*
  echo is_dir($files[0]) . " C <br>";
  if (is_dir($directory . $files[0])) {
      echo  " TRUE C <br>";
  }


  foreach($files as $val)
  */

    $cars = array
  (
  array("Volvo"),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",15)
  );

  echo " <br>" . $cars[1][2] . " <br>"
  // Create new Home Page
  // NOTE HomePage is centrel site page object
  //      which will itself create new pages
  //$HomePage = new Page($PageRegistry);
?>
