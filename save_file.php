<?php
// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;



var_dump($_POST);


$article = $_POST["article"];

var_dump($article);


$file->write("article.txt",$article);
 ?>
