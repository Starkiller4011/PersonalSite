<?php
class MetaData {
    private $title = "";
    private $author = "";
    private $description = "";
    private $keywords = array();
    private $stylesheets = array();
    private $scripts = array();
    function __construct($page_author="Derek Blue", $page_title="404 - Page not found", $page_description="", $page_keywords=array(""), $page_styles=array("css/main-theme.css"), $page_scripts=array("https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js", "js/javascript.js")) {
        $this->author = $page_author;
        $this->title = $page_title;
        $this->description = $page_description;
        foreach($page_keywords as $keyword) {
            array_push($this->keywords, $keyword);
        }
        foreach($page_styles as $style) {
            array_push($this->stylesheets, $style);
        }
        foreach($page_scripts as $script) {
            array_push($this->scripts, $script);
        }
    }
    function init() {
        echo "<head>\n";
        echo "<!-- Global site tag (gtag.js) - Google Analytics -->\n";
        echo "<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-70408631-2\"></script>\n";
        echo "<script>\n";
        echo "window.dataLayer = window.dataLayer || [];\n";
        echo "function gtag(){\ndataLayer.push(arguments);\n}\n";
        echo "gtag('js', new Date());\n";
        echo "gtag('config', 'UA-70408631-2');\n";
        echo "</script>\n";
        echo "<title>" . $this->title . "</title>\n";
        echo "<meta name=\"viewport\" content=\"width=device-width\">\n";
        echo "<meta name=\"viewport\" content=\"initial-scale=1.0\">\n";
        echo "<meta name=\"author\" content=\"" . $this->author . "\">\n";
        echo "<meta name=\"description\" content=\"" . $this->description . "\">\n";
        echo "<meta name=\"keywords\" content=\"";
        echo $this->keywords[0];
        for ($i = 1; $i < count($this->keywords); $i++) {
            echo ", " . $this->keywords[$i];
        }
        echo "\">\n";
        foreach ($this->stylesheets as $stylesheet) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $stylesheet . "\">\n";
        }
        foreach ($this->scripts as $script) {
            echo "<script src=\"" . $script . "\"></script>\n";
        }
        echo "<link rel=\"icon\" href=\"favicon.ico\">\n";
        echo "</head>\n";
    }
}
?>