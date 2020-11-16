<?php
class MenuButton {
	private $svg_icon;
	private $icon_size = "50%";
	private $button_position;
	private $button_id = "null";
	function __construct($id="000000", $position="", $path="", $size="50%", $color="#000000") {
		$this->svg_icon = new SvgIcon($path,"100%", NULL, $color);
		$this->icon_size = $size;
		$this->button_id = $id;
		$this->button_position = $position;
	}
	function init() {
		echo "<div class=\"menu-button\" id=\"" . $this->button_id . "\" style=\"" . Position::Get($this->button_position) . "\">\n";
		echo "<div class=\"button-icon\" style=\"height: " . $this->icon_size . "; margin:auto;\">\n";
		$this->svg_icon->init();
		echo "</div>\n";
		echo "</div>\n";
	}
}
?>