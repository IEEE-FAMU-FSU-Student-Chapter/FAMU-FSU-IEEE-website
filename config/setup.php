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

  $directory = 'site';
  $files = array_diff(scandir($directory), array('..', '.'));
  echo count($files) . "COUNT";

  
  /*
  foreach($files as $val)
  */
    echo $val;
  // Create new Home Page
  // NOTE HomePage is centrel site page object
  //      which will itself create new pages
  //$HomePage = new Page($PageRegistry);
?>
