<?php
class Pages extends Controller {
public function __construct() {
	
}

public function index() {
 $this->view('default/index');
}

public function about() {
 $this->view('default/index');
}

}