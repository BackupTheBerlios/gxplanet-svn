<?php

include_once("lastRSS.php");

#
# gXPlanet Config File
# 
# DESCRIPTION:
# Here you can setup the gXPlanet.
#
# AUTHOR:
# This code has been made by Juan Felipe Alvarez Saldarriaga, neb@gigax.org
#
# RELEASE:
# This code is protected by the GNU/GPL license.
#

#
# gXPlanet Setup
#
define("TITLE", "GiGAX Planet - Look What The People Think!");
define("SLOGAN", "");
define("SITE", "http://gxplanet.berlios.de");
define("ADMIN", "neb");
define("ADMINMAIL", "neb@gigax.org");

#
# gXPlanet StyleSheet
#
define("STYLE", "default");

#
# gXPlanet lastRSS Setup
#

# New Object
$rss = new lastRSS;

# Cache Dir
$rss->cache_dir = "./cache";

# Cache Time
$rss->cache_time = 1200; // 5 Min

# Number Of Items
$rss->items_limit = 1;

# CDATA Type
$rss->CDATA = "strip";

# Encoding
$rss->cp = "ISO-8859-1";

# Strip HTML Tags
#$rss->stripHTML = False;

# Date Format
$rss->date_format = "F j, Y";

# Translate &something;
$rss->translate = True;

?>
