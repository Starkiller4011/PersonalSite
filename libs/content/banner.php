<?php

class Banner {
	private $size;
	private $color;
	private $content;
	function __construct($size="100px", $color="white", $content=NULL) {
		$this->size = $size;
		$this->color = $color;
		$this->content = $content;
	}
	function init() {
		echo "<!-- Open Banner -->\n";
		echo "<div style=\"height:" . $this->size . ";width=100%;background-color:" . $this->color . ";\">";
		Tools::SafeInit($this->content);
		echo "</div>\n";
		echo "<!-- Close Banner -->\n";
	}
}

?>