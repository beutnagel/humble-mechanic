<?php
// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;



var_dump($_POST);

$question = $_POST["question"];

var_dump($question);

$file->write("faq.txt",$question);
 ?>
