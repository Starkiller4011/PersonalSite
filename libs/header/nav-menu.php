<?php
class NavMenu {
	private $id = "";
	private $selected = "";
	private $entries = array();
	function __construct($id, $entries, $selected) {
		$this->id = $id;
		$this->selected = $selected;
		$this->entries = $entries;
	}
	function init() {
		echo "<nav class=\"nav-menu\" id=\"" . $this->id . "\">\n<ul>\n";
		foreach ($this->entries as $key => $value) {
			echo "<!-- " . $key . " - " . $value . " -->\n";
			echo "<li>\n";
			echo "<a href=\"" . $value . "\"";
			if ($key == $this->selected) {
				echo " id=\"current-page\"";
			}
			echo ">" . $key . "</a>\n</li>\n";
		}
		echo "</ul>\n<div id=\"" . $this->id . "-overlay\"></div>\n</nav>\n";
	}
}
?>