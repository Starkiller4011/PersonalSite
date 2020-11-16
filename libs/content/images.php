<?php

class Image {
	protected $image;
	protected $alt_text;
	public function __construct($image, $alt_text) {
		$this->image = $image;
		$this->height = $alt_text;
	}
	public function init() {
		echo "<!-- Open Image -->\n";
		echo "<div style=\"width:100%;height:100%;background-image:url(" . $this->image . ");background-size:cover;\" alt=\"" . $this->alt_text . "\">";
		echo "<!-- Close Image -->\n";
	}
}

class CroppedImage extends Image {
	private $radius;
	public function __construct($image, $alt_text, $radius="1000px") {
		parent::__construct($image, $alt_text);
		$this->radius = $radius;
	}
	public function init() {
		echo "<!-- Open CroppedImage -->\n";
		echo "<img src=\"" . $this->image . "\" style=\"border-radius:" . $this->radius . ";height:100%, width:auto;\" alt=\"" . $this->alt_text . "\">";
		echo "<!-- Close CroppedImage -->\n";
	}
}
?>