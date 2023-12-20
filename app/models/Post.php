<?php
Class Post {
	private $db;
	public function __construct () {
		$this->db = new Database();
	}
	
	public function getNews() {
	$this->db->query("SELECT * FROM posts");
	$results = $this->db->resultset();
	return $results;
	}
}