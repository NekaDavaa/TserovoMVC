<?php
/*
* App Core class
* Creates URL & Load core controller
* URL Format - website.com/controller/method/params
*/
class Core {
	protected $currentController = 'Pages';
	protected $currentMethod = 'index';
	protected $params = [];

    public function __construct() {
    	$this->getURL();
    }

	public function getURL() {
     
     var_dump($_GET['url']);
     $url = rtrim($_GET['url'], '/');
     echo "<pre>";
     echo $url;
	}
}