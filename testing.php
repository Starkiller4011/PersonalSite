<?php
// Required php libraries
require_once($_SERVER['DOCUMENT_ROOT'] . '/PersonalSite/libs/home-libs.php');

$author = "Derek Blue";
$title = "Derek Blue | Home";
$description = "Personal website and digital resume for Derek M Blue";
$keywords = array("Derek Blue", "Derek Matthew Blue", "Developer");
$styles = array(
	"css/main-style/footer.css",
	"css/main-style/main-header.css",
	"css/main-style/main.css",
	"css/main-style/parallax-background.css"
);
$scripts = array(
	"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js",
	"js/javascript.js"
);
$page_links = array(
	"Home" => "home",
	"Projects" => "projects",
	"Publications" => "publications",
	"Resume" => "resume",
	"Hobbies" => "hobbies"
);

class TestImage {
	function init() {
		echo "<img src=\"img/selfImage-Original.jpg\" alt=\"Bio image\">";
	}
}

$meta_data = new MetaData($author, $title, $description,
	$keywords, $styles, $scripts);

$header = new MainHeader("Home", $page_links);
$footer = new DefaultFooter();

$test_img = new CroppedImage("img/selfImage-Original.jpg", "Bio Image", "1000px");
$center_array = new ElementArray(array($test_img));
$banner_content = new CenterContainer($center_array);
$test_content = new Banner("60vh", "white", $banner_content);
$test_banner = new BannerContainer($test_content, "20vh", "0vh");

$pbg1_content = new ElementArray(array($test_banner));
$pbg1 = new ParallaxBackground("img/olympicMountains2.JPG", "150vh", "0.6", $pbg1_content);
$pbg2_content = new ElementArray(array($footer));
$pbg2 = new ParallaxBackground("img/oceanSunset3.jpg", "110vh", "0.2", $pbg2_content);

$web_page = new WebPage($meta_data, array($header, $pbg1, $pbg2));
$web_page->init();
?>