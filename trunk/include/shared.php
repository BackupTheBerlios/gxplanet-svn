<?php

include_once("config.php");
	
#
# gXPlanet Shared File
#
# DESCRIPTION:
# Some things to share :)
#
# AUTHOR:                
# This code has been made by Juan Felipe Alvarez Saldarriaga, neb@gigax.org
#
# RELEASE:
# This code is protected by the GNU/GPL license.
#
define("VERSION", "0.1");
define("GXPLANET", "http://gxplanet.berlios.de/");

$adminmail = ADMINMAIL;

#
# Images & Faces dir
#
$images = SITE . "/images";
$faces = SITE . "/faces";

#
# Style file
#
$css = SITE . "/styles/" . STYLE . "/" . STYLE . ".css";

#
# Style dir
#
$styledir = SITE . "/styles/" . STYLE;

?>
