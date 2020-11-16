<?php
class MainHeader {
	private $links = array();
	private $current_page = "";
	function __construct($current_page="Home", $pages) {
		$this->links = $pages;
		$this->current_page = $current_page;
	}
	function init() {
		echo "<header class=\"main-header\">\n";
		echo "<div class=\"header-flex\">\n";
		$nav_menu_button = new NavMenuButton("Testing");
		$nav_menu_button->init();
		$nav_menu = new NavMenu("main-nav-menu", $this->links, $this->current_page);
		$nav_menu->init();
		echo "</div>\n";
		echo "</header>\n";
	}
}
?>