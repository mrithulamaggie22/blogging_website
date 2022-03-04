<?php include "connect.php"; ?>
<!doctype html>
<html lang="en">

    <head>
        <title>Create Blog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" type="text/css" href=".css">
    </head>
    <body>
    <div id="content">
  
<form method="POST" action="index.php" enctype="multipart/form-data" class="my-form">
  <div class="container">
    <h1>Create Blog</h1>
    <ul>
      <li>
        <input type="hidden" name="size" value="1000000" >
    <div>
      <input type="file" name="image">
    </div>
      </li>
      <li>
        <div class="grid grid-2">
          <input type="text" placeholder="Title" name="title"  required>  
          <input type="text" placeholder="Sub Title" name="subtitle">
        </div>
      </li>
      <li>
        <div >
          <input type="text" placeholder="Name" name="user" required >  
          
        </div>
      </li>
         
      <li>
        <textarea placeholder="Content" name="image_text" required></textarea>
      </li>
      <li>
        <div class="grid grid-3">
          <div class="required-msg">REQUIRED FIELDS</div>
          <button class="btn-grid" type="submit" name="upload" >
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
            </span>
            <span class="front">SUBMIT</span>
          </button>
          
        </div>
      </li>    
    </ul>
    <button class="btn-grid">
            <a href="http://localhost/b/index.php">
            HOME</a>
          </button> 
  </div>
</form>
<footer>
  <div class="container">
    <small>copy rights<span>❤</span> @ <a href="https://theinternacademy.wordpress.com/" target="_blank">The Intern Academy</a>
    </small>
  </div>
</footer>
</body>
</html>