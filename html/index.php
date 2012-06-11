<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- Gitted1 -->
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="Description" content="Portfolio and digital playground of Brisbane freelance web designer Tom Bawden.">
	<title>Interwebular - A Brisbane Web Designer</title>
	<link rel="stylesheet" type="text/css" href="../css/site.css" />
	<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="../css/IE.css" />
	<![endif]-->
	 <script type="text/javascript" src="../ieblocker/jquery-1.2.6.min.js"></script>
	 <script type="text/javascript" src="../ieblocker/jquery.ie6blocker.js"></script>
</head>
<body id="home">
	<?php include_once("header.html"); ?>
	<div class="inner contentwidth">
		<?php include_once("nav.html"); ?>
		<div id="ninja-banner">
			<img src="../images/Ninja_Banner.png" alt="Web Ninja" name="img1" />
			<div id="ninja-quote">
				<h1 class="gradient-reflection">Web Ninja Welcomes You.</h1>
				<p>This is a humorous sentence which is suppose to capture your attention and make you like my website...</p><br />
				<a onMouseOver="changer('img1',2)" onMouseOut="changer('img1',1)" href="javascript:void">Did it work?</a>
			</div>
		</div>
		<div id="home-content">
			<h1 class="gradient-reflection-big hello">Hello</h1>
			<div class="paragraph-wrap">
				<p>My name is Tommy. You are clearly here because you want me to design your website. If the ninja above wasn’t enough to convince you that I’m your guy, then I hope you are still reading by this point.</p>
				<p>I am a CSS ninja, wannabe graphic designer, a diehard Tottenham Hotspur fan and a professional smartarse.</p>
				<p>Making the web beautiful is my game. I build classy, minimalist websites that are focused on eye-catching content.</p>
				<p>I am a Brisbane based web administrator starting out in the world of freelance web design. If you are looking to build an online presence for your business then I would love to <a href="http://www.interwebular.com.au/html/contact.php" class="pink">hear from you.</a></p>
			</div>
		</div>
		<div id="home-content">
			<div class="skill-text">
				<h1 class="gradient-reflection-big skills">Skills</h1>
					<div class="paragraph-wrap-skill">
						<p>My skills (or lack there of).</p>
						<p>Look, I'm not perfect but <a style="text-decoration: underline;" class="tooltip" href="#">neither are you!<span>I'm kidding. I think you're great!</span></a> However, I can write code like no other and I am constantly <a href="http://www.interwebular.com.au/htnl/projects.php" class="orange">expanding my skillset</a> in a bid to become the</p>
						<p class="stand-out">WORLDS BEST WEB DESIGNER</p>
						<p style="text-align: center">(mabye)</p>
					</div>
			</div>
					<div class="skill-wrapper">
						<ul>
							<li class="skill-6-header"><h3 class="first">HTML</h3></li>
							<li class="skill-6"><h3 class="list">CSS</h3></li>
							<li class="skill-2"><h3 class="list">jQuery</h3></li>
							<li class="skill-2"><h3 class="list">PHP</h3></li>
							<li class="skill-1"><h3 class="list">Vector Art</h3></li>
							<li class="skill-1"><h3 class="list">SEO</h3></li>
						</ul>
					</div>
		</div>	
	</div>
	<div id="footer" class="contentwidth">
		<?php include_once("footer.html"); ?>
	</div>
	<script type="text/javascript">
		if(document.images) {
			pics = new Array(); 
			pics[1] = new Image();
			pics[1].src = "../images/Ninja_Banner.png"; 
			pics[2] = new Image();
			pics[2].src = "../images/Ninja_Banner_Angry.png";
		}
			function changer(from,to) {
			if(document.images) {
			document.images[from].src = pics[to].src;
			}
		}
	</script>
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