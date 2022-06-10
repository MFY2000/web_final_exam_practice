<?php

include_once ("DB.php");

$query = "SELECT * FROM `login` WHERE `Email` = '".$_POST ['email']."' and `Password` = '".$_POST ['password']."' ";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  header("Location: ../index.html");
  
  $_SESSION['type'] = "Success";
  $_SESSION['message'] = "Success login and email and password is correct";

}else{
  header("Location: ../login_page.php");

  $_SESSION['type'] = "Error";
  $_SESSION['message'] = "Error".$conn->error;
}


?>