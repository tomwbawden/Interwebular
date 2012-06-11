<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="Description" content="Interwebular Contact Page. Drop me a line.">
	<title>Interwebular Contact Page - A Brisbane Web Designer.</title>
	<link rel="stylesheet" href="../js/jquery.motionCaptcha.0.2.css" />
	<link href="../css/site.css" type="text/css" rel="stylesheet" />
	<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="../css/IE.css" />
	<![endif]-->
	<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
</head>
<body id="contact">
	<?php include_once("header.html"); ?>
	<div class="inner contentwidth">
			<?php include_once("nav.html"); ?>
			<div id="contact-area">
				<h1 class="contactheader">Drop me a line</h1>
				<form method="post" action="#" id="mc-form">
					<label for="Name">Name:</label>
					<input type="text" name="Name" id="Name" />
					
					<label for="City">City:</label>
					<input type="text" name="City" id="City" />
		
					<label for="Email">Email:</label>
					<input type="text" name="Email" id="Email" />
					
					<label for="Message">Message:</label><br />
					<textarea name="Message" rows="20" cols="20" id="Message"></textarea>
					<div id="mc">
	    				<p>Please draw the shape in the box to submit the form:</p>
	    				<canvas id="mc-canvas">Your browser does not submit this captcha feature. Please visit the site with a modern browser.</canvas>
					</div>

					<input type="submit" name="submit" disabled="disabled" value="Submit" class="button medium pink position" />
					<input type="hidden" id="mc-action" value="contactengine.php" />
				</form>
			</div>
		<div id="doodle-wrap">
			<div id="container">
				<h1 class="contactheader">...or just draw me a picture.</h1>
			    <canvas id="doodlePad" width="500" height="412">
			    	<p>Sorry, your browser does not support this web application. Dont' worry, this happens all the time. Please visit my site in a modern browser such as <a href="https://www.google.com/chrome/">Google Chrome</a>, <a href="http://www.mozilla.org/">Mozilla Firefox</a> or <a href="www.apple.com/safari/">Apple Safari</a>. It's worth it.</p>
			    </canvas>
			    <textarea name="debugConsole" id="debugConsole" rows="10" cols="60">Data</textarea>
			    <button class="button medium pink send-picture" onclick="alert('Thanks. Your picture has been sent!'); saveToServer();">Send Picture</button>
			    <p><label class="drawTool">Drawing tool: <select id="drawTool">
	        		<option value="line">Line</option>
	        		<option value="rect">Rectangle</option>
	        		<option value="pencil">Pencil</option>
	    		</select></label></p>
			</div>
		</div>
	</div>
	
	<div id="footer" class="contentwidth">
		<?php include_once("footer.html"); ?>
	</div>
	<!-- MotionCAPTCHA: -->
	<script src="../js/jquery.motionCaptcha.0.2.js" ></script>
		<script type="text/javascript" src="../js/jquery.motionCaptcha.0.2.js" ></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			
			$('#mc-form').motionCaptcha({
				shapes: ['triangle', 'x', 'rectangle', 'circle', 'check', 'zigzag', 'arrow', 'delete', 'pigtail', 'star']
			});
			
			
		});
	</script>
</script>
<script type="text/javascript" src="../js/doodle.js" ></script>
<script type="text/javascript">
		function saveToServer() {
			var imageView = document.getElementById("doodlePad");
			var canvasData = imageView.toDataURL("image/png");
			var postData = "canvasData="+canvasData;
			var debugConsole= document.getElementById("debugConsole");
			debugConsole.value=canvasData;

			//alert("canvasData ="+canvasData );
			var ajax = new XMLHttpRequest();
			ajax.open("POST",'../doodles/Save.php',true);
			ajax.setRequestHeader('Content-Type', 'canvas/upload');
			//ajax.setRequestHeader('Content-TypeLength', postData.length);

			ajax.onreadystatechange=function() {
				if (ajax.readyState == 4) {
					//alert(ajax.responseText);
					// Write out the filename.
		    		document.getElementById("debugFilenameConsole").innerHTML="Saved as<br><a target='_blank' href='"+ajax.responseText+"'>"+ajax.responseText+"</a><br>Reload this page to generate new image or click the filename to open the image file.";
				}
		  	}

			ajax.send(postData);
			echo ('Done');
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