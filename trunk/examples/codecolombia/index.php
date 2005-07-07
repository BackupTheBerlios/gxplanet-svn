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
	Head($styledir, $logo);

	?>
</div>
<div class="menu">
	<?php
		echo("<span class=\"home\"><a href=\"" . SITE . "/\">Home</a></span> <span class=\"suscription\"><a href=\"" . SITE . "/suscribe/\">Suscription</a></span>");
	?>	
</div>
<div class="suscriptors">
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
			<h2>Code: Colombia</h2>
		<a href="<?php echo(SITE); ?>" title="<?php echo(TITLE); ?>">Code: Colombia</a> its a <i>feeds</i> community of many developers and people envolved in the <i>Open Source</i> issue here in our country, <b>Colombia</b>. We want to see what's happening here! :). If you are interested try to suscribe your blog <?php echo("<a href=\"" . SITE . "/suscribe/\">here</a>"); ?>.
		</div>
		<br />
		<br />
		<?php	
		#
		# gXPlanet Loop
		#
		# A loop to call the functions and show it.
		#
		echo("<table>\n");
		foreach($feeds as $nick => $url) {
			$pic = $face[$nick];
			$burl = $blog[$nick];
			echo("<tr>\n");
			echo("<td class=\"face\">\n");
			ShowFaces($nick, $pic, $burl, $faces, $anonymous);
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
