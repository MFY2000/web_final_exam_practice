<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Untitled</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/shopping-ecommerce-products.css" />
  <link rel="stylesheet" href="assets/css/wtg-alert.css" />
</head>

<body>
  <?php
      function rating($rating){
      
        $Toreturn = "";
        $i=0;
        for ($i;$i < $rating; $i++) { 
            $Toreturn = $Toreturn."<li class='fa fa-star'></li>";
        }
        
        if($rating - $i > 0){
          $Toreturn = $Toreturn."<li class='fa fa-star-half-o'></li>";
        }
    
        return $Toreturn;
    
      }      
  ?>


  <div class="container mtr-5 mb-2">
    <div class="row">
      <div class="col-md-2 col-12 border">
        <p class="lead text-center mb-0">Max Price:</p>
        <input type="number" class="form-control text-center" value="200" /><input class="form-range w-100" type="range"
          min="0" max="200" />
        <hr />
        <p class="lead text-center mb-0">Sort By:</p>
        <select class="form-control" name="sort">
          <option value="all" selected="">Price: Low to High</option>
          <option value="reviews">Reviews</option>
          <option value="price_high">Price: High to Low</option>
          <option value="newest">Newest Arrivals</option>
        </select>
        <hr />
        <p class="lead text-center mb-0">Gender:</p>
        <select class="form-control" name="gender">
          <option value="all" selected="">All</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="unisex">Unisex</option>
        </select>
        <hr />
        <p class="lead text-center mb-0">Brand:</p>
        <select class="form-control" name="brand">
          <option value="all" selected="">All</option>
          <option value="Nike">Nike</option>
        </select>
        <hr />
        <p class="lead text-center mb-0">Color:</p>
        <select class="form-control mb-2" name="color">
          <option value="all" selected="">All</option>
          <option value="orange">Orange</option>
        </select>
      </div>

      

      <div class="col-md-10 col-12">
        <div class="shopping-grid">
          <div class="container">
            <div class="row">
              <?php
              
                function isNew($condition){
                  if($condition == "new"){
                    return "<span class='product-new-label'>New</span>";
                  }
                  return "";
                  
                }
              
              include './php/DB.php';
          
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);
          
                if ($result->num_rows > 0) {
                  while($row = $result -> fetch_row()) {
                    echo "<div class='col-md-3 col-sm-6' id='".$row[0]."'>
                    <div class='product-grid7'>
                        <div class='product-image7'>
                          <a href='#'>
                            <img
                              class='pic-1'
                              src='assets/img/".$row[3]."' /><img
                              src='assets/img/".$row[3]."'
                              class='pic-2'
                          /></a>
                          <ul class='social'>
                            <li><a class='fa fa-search'></a></li>
                            <li><a class='fa fa-shopping-bag'></a></li>
                            <li><a class='fa fa-shopping-cart'></a></li>
                          </ul>
                            ".isNew($row[5])."
                        </div>
                        <div class='product-content'>
                          <h3 class='title'><a href='#'>".$row[1]."</a></h3>
                          <ul class='rating'>
                            ".rating($row[4])."
                          </ul>
                          <div class='price'>
                            <span>$". $row[2] ."</span><span>$". ($row[2]* 1.5 ) ."</span>
                          </div>
                        </div>
                      </div>
                    </div>";
                  }
                }
                ?>

              <!-- <div class="col-md-3 col-sm-6">
                <div class="product-grid7">
                  <div class="product-image7">
                    <a href="#">
                      <img class="pic-1" src="assets/img/productPic2.png" /><img src="assets/img/productPic1.png"
                        class="pic-2" /></a>
                    <ul class="social">
                      <li><a class="fa fa-search"></a></li>
                      <li><a class="fa fa-shopping-bag"></a></li>
                      <li><a class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                  </div>
                  <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <ul class="rating">
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">
                      <span>$15.00</span><span>$20.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="product-grid7">
                  <div class="product-image7">
                    <a href="#"><img class="pic-1" src="assets/img/productPic2.png" /><img
                        src="assets/img/productPic1.png" class="pic-2" /></a>
                    <ul class="social">
                      <li><a class="fa fa-search"></a></li>
                      <li><a class="fa fa-shopping-bag"></a></li>
                      <li><a class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                  </div>
                  <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <ul class="rating">
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">
                      <span>$15.00</span><span>$20.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="product-grid7">
                  <div class="product-image7">
                    <a href="#"><img class="pic-1" src="assets/img/productPic2.png" /><img
                        src="assets/img/productPic1.png" class="pic-2" /></a>
                    <ul class="social">
                      <li><a class="fa fa-search"></a></li>
                      <li><a class="fa fa-shopping-bag"></a></li>
                      <li><a class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                  </div>
                  <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <ul class="rating">
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">
                      <span>$15.00</span><span>$20.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="product-grid7">
                  <div class="product-image7">
                    <a href="#"><img class="pic-1" src="assets/img/productPic2.png" /><img
                        src="assets/img/productPic1.png" class="pic-2" /></a>
                    <ul class="social">
                      <li><a class="fa fa-search"></a></li>
                      <li><a class="fa fa-shopping-bag"></a></li>
                      <li><a class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                  </div>
                  <div class="product-content">
                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                    <ul class="rating">
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">
                      <span>$15.00</span><span>$20.00</span>
                    </div>
                  </div>
                </div>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
    
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
<!-- 
  <script>
  $(".alertBox")
    .fadeTo(2000, 500)
    .slideUp(500, function() {
      $(".alertBox").slideUp(500);
    });
  </script> -->

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