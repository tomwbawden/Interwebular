<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="Description" content="Interwebular Project Page. Check out what I'm working on.">
	<title>Interwebular Projects - A Brisbane Web Designer</title>
	<link rel="stylesheet" type="text/css" href="../css/site.css" />
	<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="../css/IE.css" />
	<![endif]-->
		<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
		<script type="text/javascript" src="../js/jquery.fancybox.pack.js?v=2.0.4"></script>
		<script type="text/javascript">
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3", active: false, collapsible: true });
	
				// Tabs
				$('#tabs1, #tabs2').tabs();
				
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
			$(".fancybox").fancybox();
			});
			</script>

</head>
<body id="projects">
	<?php include_once("header.html"); ?>
	<div class="inner contentwidth">
		<?php include_once("nav.html"); ?>
		<div id="project-wrapper">
			<div class="project-column">
				<h4 class="title">Interwebular</h4>
				<div id="tabs1">
					<ul>
						<li><a href="#tabs-1">Overview</a></li>
						<li><a href="#tabs-2">Versions</a></li>
						<li><a href="#tabs-3">Tasks & Ideas</a></li>
					</ul>
					<div id="tabs-1">
						<a href="../images/Interwebular_Screenshot_Big.png" title="Interwebular" class="fancybox"><img class="inset-image shadow project-center" src="../images/Interwebular_Screenshot_Small.png" alt="Interwebular Screenshot Big" /></a>
						<p>Interwebular began as an experimental sandbox website, a place for me to muck around with various web languages to see what I could do.</p>
						<p>As time went on, my interest for web design grew stronger, I decided to dip into the world of freelance web design and offer my services for small web projects to the local Brisbane community</p>
						<p>With this in mind, Interwebular was re-built as a beginning to my portfolio where I could showcase my designs and hopefully drum up some interest in my services.</p>
						<p>I have played with several different designs before settling on what you are seeing currently. You can see my previous ideas by clicking the <em>Versions</em> tab at the top.</p>
					</div>
					<div id="tabs-2">
						<h5 class="title blue">Version 1</h5>
						<a rel="v1" href="../images/v1_screenshot_big.png" title="Interwebular Version 1 Home Page" class="fancybox"><img class="inset-image shadow project-center" src="../images/v1_screenshot_small.png" alt="V1 Screenshot Small" /></a>
						<a rel="v1" style="display: none;" href="../images/v1_latest_big.png" title="Interwebular Version 1 Latest Page" class="fancybox"><img class="inset-image shadow project-center" src="../images/v1_latest_small.png" alt="V1 Screenshot Small" /></a>
						<a rel="v1" style="display: none;" href="../images/v1_contact_big.png" title="Interwebular Version 1 Contact Page" class="fancybox"><img class="inset-image shadow project-center" src="../images/v1_contact_small.png" alt="V1 Screenshot Small" /></a>
						<p>Version 1 was the beginning of Interwebular. It was actually thrown together on my iPad one weekend using a brilliant app called Gusto. At this stage, I had no idea what I wanted Interwebular to be, I just wanted to play around and have some fun.</p>
						<p>Scroll through the images to see the various pages. I hadn't built a projects page before I decided to move on.</p>
						<h5 class="title blue">Version 2</h5>
						<a rel="test" href="../images/v2_screenshot_big.png" title="Interwebular Version 1" class="fancybox"><img class="inset-image shadow project-center" src="../images/v2_screenshot_small.png" alt="V2 Screenshot Small" /></a><br />
						<p>I didn't get far with Version 2 before I decided I didn't like it. It was very dark and gloomy and I couldn't see it working. I wanted to add a bit of colour to my design without it being too obtrusive.</p>
						<h5 class="title blue">Version 3</h5>
						<p>After ditching V2, I've spent several months developing version 3, which you are currently using at the moment.</p>
						<p>This time, I wanted to make sure I launched with a mostly complete website, with content on every page. This is still very much a work in progress and you will see it change with time.</p> 
						<p>Click on the <em>Goals and Ideas</em> tab to check out any upcoming plans.</p>
					</div>
					<div id="tabs-3">
						<ul class="project-list">
							<li><p>Optimise website for mobile devices.</p></li>
							<li><p>Implement 'Snippet' section to display code that I find useful.</p></li>
							<li><p>Optimise website for search engine rankings.</p></li>
							<li><p>Add a graphics section to showcase vector art.</p></li>
							<li><p>Design and upload a favicon</p></li>
							<li><p>Re-write mark-up in HTML5 and remove un-needed divs.</p></li>
							<li><p>Add RSS feed support</p></li>
							<li><p>Add canvas support for mobile devices to allow drawing.</p></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="project-column last">
				<h4 class="title">Team Treehouse Learning</h4>
				<div id="tabs2">
						<ul>
							<li><a href="#tabs-4">Overview</a></li>
							<li><a href="#tabs-5">My Badges</a></li>
						</ul>
						<div id="tabs-4">
							<a href="../images/team_treehouse_big.png" title="Team Treehouse" class="fancybox"><img class="inset-image shadow project-center" src="../images/team_treehouse_small.png" /> </a>
							<p><a href="http://www.teamtreehouse.com">Team Treehouse</a> is an online learning academy I use, specifically targeted at teaching web design and development, and even iOS programming.</p>
							<p>The courses range from the basics of HTML and CSS to more advanced items like HTML5, Javascript and Ruby.</p>
							<h5 class="title blue">How it works</h5>
							<ul class="project-list">
								<li><p>Watch a series of videos on a subject.</p></li>
								<li><p>Take a quiz or a masterclass.</p></li>
								<li><p>Unlock the badge to prove your skills.</p></li>
							</ul>
							<p>Click the <em>My Badges</em> tab at the top to see my list of completed badges.</p>
						</div>
						<div id="tabs-5">
						<a href="http://teamtreehouse.com/interwebular" target="_blank">Click here</a>
								
						</div>
				</div>				
			</div>
		</div>
	</div>
	<div id="footer" class="contentwidth">
		<?php include_once("footer.html"); ?>
	</div>
	
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