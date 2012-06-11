<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="Description" content="Interwebular Blog Page. The happenings of the world wide web.">
	<title>Interwebular Latest - A Brisbane Web Designer</title>
	<link rel="stylesheet" type="text/css" href="../css/site.css" />
	<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="../css/IE.css" />
	<![endif]-->
</head>
<body id="latest">
	<?php include_once("header.html"); ?>
	<div class="inner contentwidth">
		<?php include_once("nav.html"); ?>
		<div id="blogwrap">
			<h2 class="latestheader"><a href="#">Words with Tommy</a></h2>
			<?php include_once("/home/interweb/public_html/html/blog/blog.php"); ?>
		</div>
		<div id="sidebar">
			<h2 class="latestheader"><a href="#">Tweets with Tommy</a></h2>
			<div id="twitter-wrap">
				<ul id="twitter_update_list"><li>Twitter feed loading</li></ul>
			</div>
		</div>
	</div>
	

	<div id="footer" class="contentwidth">
		<?php include_once("footer.html"); ?>
	</div>
	
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/intrwebular.json?callback=twitterCallback2&count=5"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28350165-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>