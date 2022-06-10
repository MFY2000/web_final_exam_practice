<?php

  session_start();  

  $conn;

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $databasename = 'final_exam_web';
    
  $conn = mysqli_connect($servername,$username,$password,$databasename); 
  if (!$conn) {
      
  }else{
        
      // echo ;
  }

?>