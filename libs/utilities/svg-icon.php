<?php
class SvgIcon {
	private $svg_path;
	private $icon_color = "#000000";
	private $height;
	private $width;
	function __construct($path, $height=NULL, $width=NULL, $color="#000000") {
		$this->height = $height;
		$this->width = $width;
		$this->svg_path = $path;
		$this->icon_color = $color;
	}
	function init() {
		echo "<svg";
		if ($this->height != NULL) {
			echo " height=\"" . $this->height . "\"";
		}
		if ($this->width != NULL) {
			echo " width=\"" . $this->width . "\"";
		}
		echo " version=\"1.1\" viewBox=\"0 0 52.917 52.917\">\n<g transform=\"translate(0 -244.08)\">\n<path d=\"" . $this->svg_path . "\" fill=\"" . $this->icon_color . "\" stroke-width=\".23141\" />\n</g>\n</svg>\n";
	}
}
?>