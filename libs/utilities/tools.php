<?php

class Tools {

	public static function NullCheck($content, $inverse=false) {
		if($inverse) {
			if($content == NULL) {
				return false;
			} else {
				return true;
			}
		} else {
			if($content == NULL) {
				return true;
			} else {
				return false;
			}
		}
	}

	public static function SafeInit($content) {
		if(Tools::NullCheck($content, true)) {
			$content->init();
		}
	}

}

?>