<?php session_start(); ?>
<html>
<head>
	<title>Tommy & Whitney Do Europe</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <!--<link rel="stylesheet" type="text/css" href="../css/normalize.css">-->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="../js/jquery.jscrollpane.js"></script>
</head>
<body>

<div id="wrapper">
	<div id="header"></div>
	<div id="navigation">
		<ul>
			<a href="#"><li class="home"><img class="valigner" />Home</li></a>
			<a href="../gallery/index.php"><li class="gallery"><img class="valigner" />Gallery</li></a>
			<a href="#"><li class="email"><img class="valigner" />Email Us</li></a>
		</ul>
	</div>	
	<div id="contentWrap">
			<?php include("/home/interweb/public_html/eurotrip/html/blog/blog.php"); ?>
      <div id="sideContent">
          <h3>We are here</h3>
          <div id="location">
          <!-- Google Public Location Badge -->
          <iframe src="http://www.google.com.au/latitude/apps/badge/api?user=-6599666528099074053&type=iframe&maptype=roadmap&hl=en-GB" width="280" height="250" frameborder="0"></iframe>
          <!-- To disable location sharing, you *must* visit https://www.google.com/latitude/apps/badge and disable the Google Public Location badge. Removing this code snippet is not enough! -->
          </div>
      </div>
  </div>
</div>
<script type="text/javascript" src="../js/postcustomscript.js"></script>
</body>
</html> 