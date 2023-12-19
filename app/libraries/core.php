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
  
      $url = $this->getURL();
      if (!empty($url)) {
      if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      	$this->currentController = ucwords($url[0]);
      	unset($url[0]);
      }
      }

      //Require controller
      require_once '../app/controllers/' . $this->currentController . '.php';

      //Instance controller class
      $this->currentController = new $this->currentController;

    }

	public function getURL() {
      if (isset($_GET['url'])) {
     $url = rtrim($_GET['url'], '/');
     $url = filter_var($url, FILTER_SANITIZE_URL);
     $url = explode('/', $url);
	}
	else {
        $url = [];
    }
   return $url;
}
}