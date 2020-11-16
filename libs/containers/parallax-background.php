<?php
class ParallaxBackground {
	private $image;
	private $container_height = "100vh";
	private $children = array();
	function __construct($bg_image="img/sandyBeach.JPG", $height="100vh", $child_nodes=NULL) {
		$this->image = $bg_image;
		$this->container_height = $height;
		if ($child_nodes != NULL) {
			foreach ($child_nodes as $child) {
				array_push($this->children, $child);
			}
		}
	}
	function init() {
		echo "<div class=\"parallax-background\" style=\"";
		echo "background-image:url(" . $this->image . ");";
		echo "min-height:" . $this->container_height . ";\">\n";
		foreach ($this->children as $child) {
			$child->init();
		}
		echo "</div>\n";
	}
}
?>