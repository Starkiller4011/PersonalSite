<?php
class Position {
	public static function Get($position) {
		$positions = array(
			"left" => "left:0px;",
			"right" => "right:0px;",
			"top" => "top:0px;",
			"top-left" => "top:0px;left:0px;",
			"top-right" => "top:0px;right:0px;",
			"bottom" => "bottom:0px;",
			"bottom-left" => "bottom:0px;left:0px;",
			"bottom-right" => "bottom:0px;right:0px;"
		);
		return $positions[$position];
	}
}
?>