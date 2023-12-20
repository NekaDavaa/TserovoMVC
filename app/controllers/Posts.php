<?php
class Posts extends Controller {
	public function __construct () {
	}
	
	public function index(){
       $this->view('posts/myview');
	}

	public function myMethod ($id) {
		 print_r($id);
	}
}