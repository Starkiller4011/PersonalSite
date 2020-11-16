<?php

class BannerContainer {
	private $content;
	private $min_size;
	private $border_size;
	public function __construct($content=NULL, $border=NULL, $min=NULL) {
		$this->content = $content;
		$this->border_size = $border;
		$this->min_size = $min;
	}
	public function init() {
		echo "<!-- Open BannerContainer -->\n";
		echo "<div style=\"width:100%;";
		if (Tools::NullCheck($this->min_size, true)) {
			echo "min-height:" . $this->min_size . ";";
		}
		if (Tools::NullCheck($this->border_size, true)) {
			echo "padding: " . $this->border_size . " 0px;";
		}
		echo "\">";
		echo "<div style=\"width:100%;margin:0px;\">\n";
		Tools::SafeInit($this->content);
		echo "</div>\n</div>";
		echo "<!-- Close BannerContainer -->\n";
	}
}

?>