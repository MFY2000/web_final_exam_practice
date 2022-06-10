<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Untitled</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css" />
  <link rel="stylesheet" href="assets/css/wtg-alert.css" />
</head>

<body>
  <div class="row register-form">
    <div class="col-md-8 offset-md-2">
      <form class="custom-form" method="post" action="./php/product_admin.php" enctype="multipart/form-data">
        <h1>Add new Product&nbsp;</h1>
        <div class="row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label" for="name-input-field">Title</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control" type="text" name="title" required />
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label" for="email-input-field">Price</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control" type="number" min=0 name="price" required />
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label" for="pawssword-input-field">image</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control"  type="file" name="fileToUpload" required />
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label">Rating</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control" type="number" min=0 max=5 name="rating" required />
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label">Status</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control" type="text" name="status" required />
          </div>
        </div>
        <input type="submit" name="submit" value="submit" />

        
      </form>
    </div>
  </div>

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

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script>
  // $(".alertBox")
  //   .fadeTo(2000, 500)
  //   .slideUp(500, function() {
  //     $(".alertBox").slideUp(500);
  //   });
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