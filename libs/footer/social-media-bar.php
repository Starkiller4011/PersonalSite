<?php
class SocialMediaBar {
	function init() {
		echo "<!-- External Links -->\n";
		echo "<div class=\"social-media\">\n";
		echo "<ul>\n";
		echo "<li>\n";
		$mail_link = new SocialMediaLink("email");
		$mail_link->init();
		echo "</li>\n";
		echo "<li>\n";
		$twitter_link = new SocialMediaLink("twitter");
		$twitter_link->init();
		echo "</li>\n";
		echo "<li>\n";
		$linkedin_link = new SocialMediaLink("linkedin");
		$linkedin_link->init();
		echo "</li>\n";
		echo "<li>\n";
		$github_link = new SocialMediaLink("github");
		$github_link->init();
		echo "</li>\n";
		echo "<li>\n";
		$stack_link = new SocialMediaLink("stack");
		$stack_link->init();
		echo "</li>\n";
		echo "</ul>\n";
		echo "</div>\n";
	}
}
?>