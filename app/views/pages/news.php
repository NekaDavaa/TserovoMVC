<h1>Hi from news</h1>

<?php 

foreach ($data['news'] as $article) {
	echo $article->title . "<br>";
}

?>