
	<!--
		<?php //include("Home") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>
      FAMU-FSU IEEE
  </title>
  <meta charset="UTF-8" />
	<meta name="author" content="Dominic Eaton">
  <meta name="description" content="FAMU FSU COE IEEE Student Chapter website">
  <meta name="viewport" content ="width-device-width, initial-scale=1.0">
  <?php //include('config/css.php'); ?>
	<script type="text/javascript" src="scripts\imageSlider.js"></script>
	<script type="text/javascript" src="scripts\featured.js"></script>
	<script type="text/javascript" src="scripts\infoTiles.js"></script>
	<script type="text/javascript" src="scripts\three.min.js"></script>
	<script type="text/javascript" src="scripts\TrackballControls.js"></script>

</head>



</html>
-->

<title>
FAMU-FSU IEEE
</title>
<meta charset="UTF-8" />
<meta name="author" content="Dominic Eaton">
<meta name="description" content="FAMU FSU COE IEEE Student Chapter website">
<meta name="viewport" content ="width-device-width, initial-scale=1.0">
<?php include('config/css.php'); ?>
<script type="text/javascript" src="scripts\imageSlider.js"></script>
<script type="text/javascript" src="scripts\featured.js"></script>
<script type="text/javascript" src="scripts\infoTiles.js"></script>
<script type="text/javascript" src="scripts\three.min.js"></script>
<script type="text/javascript" src="scripts\TrackballControls.js"></script>


  functon setupCoreSite() {
    // Configure database
    $db = "database/site.db";
    $perm = 0777;
    $dbc = database::getInstance();
    $dbc->open_db($db, $perm, $error);

    // Load page content
    if(isset($_GET['page'])) {
    	$pageId = $_GET['page'];
    } else {
    	$pageId = 1; // Load initial page content
    }

    // Create to hold all pages of website
    //$dbc->doQuery('DROP TABLE pages');
    $site_pages = new pages();
    //$numPages = $site_pages->getPages();

    for ($i=0; $i < $numPages ; $i++) {
    	$data = array('title'=>$title[$i], 'header'=>$header[$i], 'content'=>$content[$i], 'stylesheet'=>$stylesheet[$i]);
    	$site_pages->bind($data);
    	$site_pages->store($i+1);
    }

    $page = $site_pages->load($pageId);
    echo "</br> title: " . $page['title'] ."</br>";

    $page['content'] = base64_decode($page['content']);
    echo "TITLE: " . $page['title'] . "</br>";
  }
