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
  <?php include('config/css.php'); ?>
	<script type="text/javascript" src="scripts\imageSlider.js"></script>
	<script type="text/javascript" src="scripts\featured.js"></script>
	<script type="text/javascript" src="scripts\infoTiles.js"></script>
	<script type="text/javascript" src="scripts\three.min.js"></script>
	<script type="text/javascript" src="scripts\TrackballControls.js"></script>

</head>

<body>
  <div id="container">
    <header>
      <nav>
        <ul>
          <li>HOME<!--<img src="Images/icons/down_arrow2.png"  width="20px" height="12px" style="margin-left: 12px;" />--></li>
          <li><a href="/?page=site\About\Officers">ABOUT US</a></li>
          <li>EVENTS<div class="arrow_down"></div></li>
          <li>PROJECTS<div class="arrow_down"></div> </li>
          <li>RESOURCES<div class="arrow_down"></div></li>
          <li>CONTACT</li>
        </ul>
      </nav>

      <div id="logo">
        <img src="Images\logos\IEEE.jpg" alt="FAMU FSU IEEE Logo">
      </div>
    </header>

		<?php
			if(isset($_GET['page'])) {
				if($_GET['page'] == "site\About\Officers") {
					echo "PAGE";
				}
			} else {
				echo "NO PAGE";
			}
		?>
    <footer>
      FOOTER CONTENT
    </footer>
  </div>
</html>
