<?php
class ParallaxBackground {
	private $image;
	private $height;
	private $opacity;
	private $content;
	public function __construct($image="img/sandyBeach.JPG", $height="100vh", $opacity="0.3", $content=NULL) {
		$this->image = $image;
		$this->height = $height;
		$this->opacity = $opacity;
		$this->content = $content;
	}
	public function init() {
		echo "<!-- Open ParallaxBackground -->\n";
		echo "<div class=\"parallax-background\" style=\"min-height:" . $this->height . ";background-image: url(" . $this->image . ");width: 100%;position: relative;background-position: center;background-repeat: no-repeat;background-size: cover;\">\n";
		echo "<div style=\"height:" . $this->height . ";z-index:1;background-color:rgba(255, 255, 255, " . $this->opacity . ");\">\n";
		Tools::SafeInit($this->content);
		echo "</div>\n";
		echo "</div>\n";
		echo "<!-- Close ParallaxBackground -->\n";
	}
}
?>