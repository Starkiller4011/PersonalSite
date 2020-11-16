<?php

class CenterContainer {
	private $content;
	public function __construct($content=NULL) {
		$this->content = $content;
	}
	public function init() {
		echo "<!-- Open CenterContainer -->\n";
		echo "<div style=\"height:100%;width:100%;display:flex;align-items: center;justify-content: center;\">\n";
		echo "<div style=\"max-height:100%;max-width:100%;\">\n";
		Tools::SafeInit($this->content);
		echo "</div>\n";
		echo "</div>\n";
		echo "<!-- Close CenterContainer -->\n";
	}
}

?>