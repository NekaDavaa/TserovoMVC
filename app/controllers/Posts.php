<?php
class Posts {
	public function __construct () {
		echo "Posts loaded";
	}
	
	public function index(){

	}

	public function myMethod ($id) {
		 print_r($id);
	}
}