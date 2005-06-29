<?php

include_once("shared.php");

#
# gXPlanet Functions
#
# DESCRITION:
# Some functions to show the feeds on the gXPlanet Loop and the "faces". 
#
# AUTHOR:
# This code has been made by Juan Felipe Alvarez Saldarriaga, neb@gigax.org
#
# RELEASE:
# This code is protected by the GNU/GPL license.
#

#
# gXPlanet ShowFeeds Function
#
# Show the RSS feeds on the gXPlanet Loop.
#
function ShowFeeds($nick, $url, $burl, $images) {
        global $rss;

        if($rs = $rss->get($url)) {
                foreach($rs['items'] as $item) {
			echo("<a href=\"$burl\" title=\"$nick's Blog\"><b>$nick</b></a> <a href=\"$url\" title=\"$nick's Feed\"><img src=\"$images/btn_rss.gif\"></a> on <b>$item[pubDate]</b> say:\n");
                        echo("<br /><br />\n");
                        echo("<li><a href=\"$item[link]\" title=\"$item[title]\">$item[title]</a></li>\n");
                        echo("<br />\n");
			if ($item['content:encoded'] == "") {
                        	echo("$item[description]\n");
			} else {
                        	echo($item['content:encoded']);
			}
                        echo("\n");
                        echo("$item[wfw]\n");
                }
                if($rs['items_count'] <= 0) {
			echo("<b>ERROR:</b> Sorry, nothing to view on <a href=\"$burl\" title=\"$nick\"><b>$nick's blog</b></a>.\n");
                }
        } else {
		echo("<b>ERROR:</b> I cant read the <a href=\"$burl\" title=\"$nick\"><b>$nick's blog</b></a> <b>RSS</b> file.\n<br />\n");
        }
}

#
# gXPlanet ShowFaces Function
#
# This function show the "faces".
#
function ShowFaces($nick, $pic, $burl, $faces) {
        if ($pic == "") {
                echo("<a name=\"$nick\" href=\"$burl\" title=\"$nick's Blog\"><img src=\"$faces/anonymous.png\" alt=\"$nick\"></a>\n");
                echo("<br />");
                echo("<a href=\"$burl\" title=\"$nick's Blog\">$nick</a>");
        } else {
                echo("<a href=\"$burl\" title=\"$nick's Blog\"><img src=\"$pic\" alt=\"$nick\"></a>\n");
                echo("<br />");
                echo("<a href=\"$burl\" title=\"$nick's Blog\">$nick</a>");
        }
}

#
# gXPlanet ShowSuscriptors Function
#
# Wee gonna show the nicks here :D
#
function ShowPeople($nick, $url, $burl, $images) {
	echo("<a href=\"#$nick\" title=\"$nick's Last Post\">$nick</a>\n");
	echo("<a href=\"$burl\" title=\"$nick's Blog\">(Blog)</a>\n");
	echo("<a href=\"$url\" title=\"$nick's Feed\"><img src=\"$images/btn_rss.gif\"></a>\n");
	echo("<br />");
}

#
# gXPlanet LastEntry Function
#
function LastEntry($nick, $url, $burl) {
	global $rss;

	if($rs = $rss->get($url)) {
		foreach($rs['items'] as $item) {
			echo("<div class=\"lastentry\">$item[pubDate]</div>");
		}
	} else {
		echo("<div class=\"lastentry\">None</div>");
	}
}

#
# gXPlanet Header Function
#
function Head($styledir) {
	echo("<div class=\"logo\">");
	echo("<a href=\"" . SITE . "\" title=\"" . TITLE . "\"><img src=\"$styledir/logo.png\" alt=\"" . TITLE . "\" title=\"" . TITLE . "\"></a>\n");
	echo("</div>");
	echo("<div class=\"slogan\">");
	echo("<h2>" . SLOGAN . "</h2>");
	echo("</div>");
}

#
# gXPlanet Footer Function
#
function Footer() {
	echo("Powered By <a href=\"" . GXPLANET . "\" title=\"" . VERSION . " \">gXPlanet</a> " . VERSION ."\n");
}

?>
