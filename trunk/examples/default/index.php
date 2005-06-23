<?php

#
# gXPlanet Includes 
#
include_once("include/config.php");
include_once("include/functions.php");
include_once("include/shared.php");
include_once("include/people.php");

?>
<html>
<head>
	<title><?php echo(TITLE); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo("$css"); ?>" />
</head>
<body>
<div class="header">
	<?php

	#
	# gXPlanet Header
	#
	Head($styledir);

	?>
</div>
<div class="suscriptors">
	<h2>Suscriptors:</h2>
	<?php

	#
	# gXPlanet Suscriptors
	#
	# Show the people of gXPlanet.
	#
	foreach($feeds as $nick => $url) {
		$burl = $blog[$nick];
		ShowSuscriptors($nick, $burl);
		LastEntry($nick, $url, $burl);
	}
	echo("<br /><br />");
	echo("Suscribe your Blog's Feed <a href=\"" . SITE . "/suscribe/\">here</a> or contact <a href=\"mailto:" . ADMINMAIL . "\">" . ADMIN . "</a> directly.");
	
	?>
	<br />
</div>
<div class="content-box">
	<div class="content">
		<?php
		#
		# The actual date.
		#
		echo("<h2>");
		echo(date("F j, Y"));
		echo("</h2>");
		
		?>
		<div class="note">
			<b>GiGAX Planet</b> it's a feeds agregator made in PHP, simple, easy to use and configure.
			<b>GiGAX Planet</b> uses a modified version of the <a href="http://lastrss.webdot.cz/">lastRSS</a> class by <b>Vojtech Semecky</b> to work with the RSS feeds and the <a href="http://www.2rss.com">2RSS.com</a> service to convert Atom feeds, thank you guys :).
		</div>
		<br />
		<br />
		<?php	
		#
		# gXPlanet Loop
		#
		# A loop to call the functions and show it.
		#
		echo("<table cellpadding=\"10\" border=\"0\">\n");
		foreach($feeds as $nick => $url) {
			$pic = $face[$nick];
			$burl = $blog[$nick];
			echo("<tr>\n");
			echo("<td class=\"face\">\n");
			ShowFaces($nick, $pic, $burl, $faces);
			echo("</td>\n");
			echo("<td class=\"post\">\n");
			ShowFeeds($nick, $url, $burl);
			echo("</td>\n");
			echo("</tr>\n");
		}	
		echo("</table>\n");

		?>
	</div>
</div>
<div class="footer">
	<?php

	#
	# gXPlanet Footer		
	#
	Footer();

	?>
</div>
</body>
</html>
