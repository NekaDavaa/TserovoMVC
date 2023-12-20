<?php
class Pages extends Controller {
public function __construct() {
	$this->newsModel = $this->model('Post');
}

public function index() {
 $this->view('pages/index');
}

public function news() {
 $news = $this->newsModel->getNews();
 $data = [
    'title' => 'News',
    'news' => $news
 ];
 $this->view('pages/news', $data);
}

}