<?php
// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;

<<<<<<< HEAD
$filename = "faq.txt";
=======
$filenameQuestions = "faq.txt";
>>>>>>> ec934c5e24b97ac3c5329894355e2020fe771ebb
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">

  <h2>Frequently Asked Questions</h2>

  <div class="accordion">
    <div class="accordion-item">
<<<<<<< HEAD
      <a>  <?php echo($file->read($filename));?></a>
      <div class="content">
        <p>  <?php echo($file->read($filename));?></p>
=======
      <a>  <?php echo($file->read($filenameQuestions));?></a>
      <div class="content">
        <p></p>
>>>>>>> ec934c5e24b97ac3c5329894355e2020fe771ebb
      </div>
    </div>
    <div class="accordion-item">
      <a>Why is the sky blue?</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Will we ever discover aliens?</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How much does the Earth weigh?</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How do airplanes stay up?</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
  </div>
  
</div>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>