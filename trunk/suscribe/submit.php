<?php

#
# gXPlanet Includes
#
include_once("../include/config.php");
include_once("../include/functions.php");
include_once("../include/shared.php");

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
<div class="content-box">
	<div class="content">
		<?php

		#
		# The actual date.
		#
		echo("<h2>");
		echo(date("F j, Y"));
		echo("</h2>");

		if(isset($_POST['submit'])) {
                	extract($_POST);
		        if(!empty($nick) && !empty($burl) && !empty($feed)) {
                        	$body = "       
	                        gXPlanet - Contact
        	                Name/Nick: $nick
                	        Blog URL: $burl
                        	Feed Link: $feed";
	                        mail("$adminmail", "gXPlanet - Contact - $nick", $body);
	                        mail("nebiros@gmail.com", "gXPlanet - Contact - $nick", $body);
        	                echo("<b>The message has been sent.</b><br /><br />");
                	        echo("<input type=\"button\" value=\"Atras\" onclick=\"self.history.back();\">");
	                } else {
        	                echo("<b>ERROR:</b> All the fields are a mandatory.");
				echo("<br /><br />");
				echo("<input type=\"button\" value=\"Back\" onclick=\"self.history.back();\">");
			}
	        } else {
        	        return 1;
		}

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
