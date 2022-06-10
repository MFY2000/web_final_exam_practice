<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Untitled</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/Login-Form-Dark.css" />
  <link rel="stylesheet" href="assets/css/wtg-alert.css" />
</head>

<body>
  <section class="login-dark">
    <form method="post" action="./php/signIn.php">
      <h1 style="text-align: center">Sign in</h1>
      <div class="illustration">
        <i class="icon ion-ios-locked-outline"></i>
      </div>
      <div class="mb-3">
        <input class="form-control" type="name" name="name" placeholder="Name" required />
      </div>
      <div class="mb-3">
        <input class="form-control" type="email" name="email" placeholder="Email" required />
      </div>
      <div class="mb-3">
        <input class="form-control" type="password" name="password" placeholder="Password" required />
      </div>
      <div class="mb-3">
        <button class="btn btn-primary d-block w-100" type="submit">
          Sign In
        </button>
      </div>
      <div class="details">
        <a class="forgot signIn" href="login_page.php">login</a>
      </div>
    </form>

    <?php 


  session_start(); 
  
  if(isset($_SESSION['type'])){
    
    if($_SESSION['type'] != "Success"){
      echo '<div class="wtg-alert wtg-alert-danger alertBox" id="alert">
      <div class="wtg-alert-title">
        <i class="wtg-alert-icon glyphicon glyphicon-star"></i>
        <strong>Error</strong>
      </div>
      <p class="wtg-alert-text">
        '.$_SESSION['message'].'
      </p>
    </div>';
    }else{
      echo '<div class="wtg-alert wtg-alert-success alertBox " id="alert">
      <div class="wtg-alert-title">
        <i class="wtg-alert-icon glyphicon glyphicon-star"></i>
        <strong>Success</strong>
      </div>
      <p class="wtg-alert-text">
      '.$_SESSION['message'].'
      </p>';
    }
    unset($_SESSION['type']);
    echo "<script>
    setTimeout(function(){
      document.getElementById('alert').style.display = 'none';
    },5000);
    </script>";
  }




?>




  </section>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <script>
  $(".alertBox").fadeTo(2000, 500).slideUp(500, function() {
    $(".alertBox").slideUp(500);
  });
  </script>

  <style>
  .alertBox {
    width: 35%;
    position: absolute;
    right: 0px;
    bottom: 0%;
  }
  </style>
</body>

</html>