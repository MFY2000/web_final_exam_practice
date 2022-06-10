<?php
include ("DB.php");


$target_dir = "../assets/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (! is_dir($target_dir) ) mkdir ( $target_dir , 0755);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
    uploadData();
    
    
    
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    uploadData();
    
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

function uploadData(){
  $Query = "INSERT INTO `product`(`Title`, `Price`, `image`, `Rating`, `Status`) VALUES ('".$_POST['title']."','".$_POST['price']."','".basename($_FILES["fileToUpload"]["name"])."','".$_POST['rating']."','".$_POST['status']."')";


  $result = $GLOBALS["conn"]->query($Query);
  if($result){
    
    $_SESSION['type'] = "Success";
    $_SESSION['message'] = "product added successfully";
  }else{
    $_SESSION['type'] = "Error";
    $_SESSION['message'] = "Error".$conn->error;
  }
  header("Location: ../Admin_Product_add.php");
}

?>