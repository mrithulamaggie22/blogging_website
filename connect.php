<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");
  if (!$db) {
  echo "Connection failed!";
  exit();
}


  // Initialize message variable
  

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $user=$_POST['user'];

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image, image_text , title , subtitle , user) VALUES ('$image', '$image_text', '$title' ,'$subtitle','$user')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  
  $result = mysqli_query($db, "SELECT * FROM images ");
  
?>