<?php

class ElementList {
	private $content;
	public function __construct($content=NULL) {
		$this->content = $content;
	}
	public function init() {
		if(Tools::NullCheck($this->content, true)) {
			echo "<!-- Open ElementList -->\n";
			echo "<ul>\n";
			foreach ($this->content as $child) {
				echo "<li>\n";
				Tools::SafeInit($child);
				echo "</li>\n";
			}
			echo "</ul>\n";
			echo "<!-- Close ElementList -->\n";
		}
	}
}

?>