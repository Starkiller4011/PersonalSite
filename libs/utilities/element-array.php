<?php

class ElementArray {
	private $children;
	public function __construct($elements=NULL) {
		$this->children = $elements;
	}
	public function init() {
		if ($this->children != NULL) {
			foreach ($this->children as $child) {
				$child->init();
			}
		}
	}
}

?>