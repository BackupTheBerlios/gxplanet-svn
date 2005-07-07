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
        Head($styledir, $logo);

        ?>
</div>
<div class="menu">
        <?php
		echo("<span class=\"home\"><a href=\"" . SITE . "/\">Home</a></span> <span class=\"suscription\"><a href=\"" . SITE . "/suscribe/\">Suscription</a></span>");
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
		
		?>
		<h2>Suscription</h2>
        	<br />
	        <form method="POST" action="submit.php">
	        <b>Name/Nick</b>
	        <br />
	        <br />
	        <input type="text" size="50" name="nick"> 
	        <br />
	        <br />
	        <b>Blog URL</b>
	        <br />
	        <br />
	        <input type="text" size="50" name="burl">
	        <br />
	        <br />
	        <b>Feed Link</b>
	        <br />
	        <br />
	        <input type="text" size="50" name="feed">
	        <br />
	        <br />
	        <input type="submit" name="submit" value="Send">&nbsp;&nbsp;<input type="reset" name="reset" value="Clear">
	        </form>
	        <br />
	        <br />
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
