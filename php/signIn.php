<?php
  include_once ("DB.php");

 
  
  $query = "INSERT INTO `login`(`name`, `email`, `password` ) VALUES ('".$_POST["name"]."', '".$_POST["email"]."' , '".$_POST["password"]."')";
  $result = $conn->query($query);
  
  
  if($result){
    header("Location: ../login_page.php");
    
    $_SESSION['type'] = "Success";
    $_SESSION['message'] = "Success login and email and password is correct";
  }else{
    header("Location: ../SignIn_page.php");

    $_SESSION['type'] = "Error";
    $_SESSION['message'] = "Error".$conn->error;
  }

  

?>