<?php
class Footer {
	function init() {
		echo "<!-- Footer -->\n";
		echo "<footer>\n";
		echo "<div class=\"footer-block\">\n";
		echo "<p class=\"very-small-text light-text\">Contact</p>\n";
		echo "</div>\n";
		$social_media_bar = new SocialMediaBar();
		$social_media_bar->init();
		echo "<!-- Copyright -->\n";
		echo "<div class=\"footer-block\">\n";
		echo "<p class=\"very-small-text light-text\">Site design &copy 2019 Derek Blue</p>\n";
		echo "</div>\n";
		echo "</footer>\n";
	}
}
?>