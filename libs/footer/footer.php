<?php
class Footer {
	protected $content;
	public function __construct($content=NULL) {
		$this->content = $content;
	}
	public function init() {
		echo "<!-- Open Footer -->\n";
		echo "<footer>\n";
		echo "<div class=\"footer-block\">\n";
		echo "<p class=\"very-small-text light-text\">Contact</p>\n";
		echo "</div>\n";
		Tools::SafeInit($this->content);
		echo "<!-- Copyright -->\n";
		echo "<div class=\"footer-block\">\n";
		echo "<p class=\"very-small-text light-text\">Site design &copy " . date("Y") . " Derek Blue</p>\n";
		echo "</div>\n";
		echo "</footer>\n";
		echo "<!-- Close Footer -->\n";
	}
}

class DefaultFooter extends Footer {
	public function __construct() {
		$content = new SocialMediaBar();
		$this->content = $content;
	}
}

?>