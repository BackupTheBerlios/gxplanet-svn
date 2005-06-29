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
	<h2>Planeta Colibri:</h2>
	<a href="<?php echo(SITE); ?>" title="<?php echo(TITLE); ?>">Planeta Colibri</a> its a community of <i>feeds</i> of many developers and people envolved in the <i>Open Source</i> isue here in our country, <b>Colombia</b>. The <a href="<?php echo(SITE); ?>" title="<?php echo(TITLE); ?>">Planeta Colibri</a> logo its a modification of the orginal <a href="http://bachue.com/colibri/">Colibri</a> logo, made by <i>Javier Moreno</i>.
	<h2>People:</h2>
	<?php

	#
	# gXPlanet Suscriptors
	#
	# Show the people of gXPlanet.
	#
	foreach($feeds as $nick => $url) {
		$burl = $blog[$nick];
		ShowPeople($nick, $url, $burl, $images);
		LastEntry($nick, $url, $burl);
	}
	
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
		<?php
			
			echo("If you want to be here with your <b>blog's feed</b>, suscribe yourself to <a href=\"" . SITE . "\">" . TITLE . "</a> directly <a href=\"" . SITE . "/suscribe/\">here</a> or conctat the administrator via email: <a href=\"mailto:" . ADMINMAIL . "\">" . ADMIN . "</a>.");

		?>
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
			ShowFeeds($nick, $url, $burl, $images);
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
