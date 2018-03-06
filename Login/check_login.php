<?php

$loginName = "jarne";
$loginCode = "mylittlepony";
    
session_start();
if($_POST['username'] === $loginName && $_POST['password'] === $loginCode){
	header('Location: website.php');
} else {
    header('Location: Index.php');
}

?>