<?php
class SocialMediaBar {
	private $links;
	function __construct() {
		$mail_link = new SocialMediaLink("email");
		$twitter_link = new SocialMediaLink("twitter");
		$linkedin_link = new SocialMediaLink("linkedin");
		$github_link = new SocialMediaLink("github");
		$stack_link = new SocialMediaLink("stack");
		$this->links = array($mail_link, $twitter_link, $linkedin_link, $github_link, $stack_link);
	}
	function init() {
		echo "<!-- Open SocialMediaBar -->\n";
		echo "<div class=\"social-media\">\n";
		$links_list = new ElementList($this->links);
		Tools::SafeInit($links_list);
		echo "</div>\n";
		echo "<!-- Close SocialMediaBar -->\n";
	}
}
?>