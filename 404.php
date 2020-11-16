<?php
// Required php libraries
require_once($_SERVER['DOCUMENT_ROOT'] . '/libs/libs.php');

$author = "Derek Blue";
$title = "Derek Blue | 404 - Page not found";
$description = "404 Error page";
$keywords = array("");
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

$meta_data = new MetaData($author, $title, $description,
	$keywords, $styles, $scripts);

$header = new MainHeader("404", $page_links);
$footer = new Footer();
$banner = new ParallaxBackground("img/storm.jpg", "100vh", array($footer));

$webpage = new WebPage($meta_data, array($banner, $header));
$webpage->init();
?>