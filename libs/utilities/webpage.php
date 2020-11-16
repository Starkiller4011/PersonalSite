<?php
class WebPage {
    private $page_meta_data;
    private $page_elements = array();
    function __construct($meta_data=NULL, $elements=NULL) {
        if ($meta_data == NULL or $elements == NULL) {
            header('Location: www.derekmblue.ca/404');
            die();
        } else {
            $this->page_meta_data = $meta_data;
            foreach ($elements as $element) {
                array_push($this->page_elements, $element);
            }
        }
    }
    function init() {
        echo "<!DOCTYPE html>\n";
        echo "<html>\n";
        $this->page_meta_data->init();
        echo "<body>\n";
        foreach ($this->page_elements as $page_element) {
            $page_element->init();
        }
        echo "</body>\n";
        echo "</html>";
    }
}
?>