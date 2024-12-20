<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teehosting E-commerce</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!-- Top Section -->
  <div id="top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offer">
          <a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
          <a href="#">Shopping Cart Total Price: INR 100, Total Items: 2</a>
        </div>
        <div class="col-md-6 text-right">
          <ul class="menu list-inline">
            <li><a href="customer_registration.php">Register</a></li>
            <li><a href="checkout.php">My Account</a></li>
            <li><a href="cart.php">Go to Cart</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <div class="navbar navbar-default" id="navbar">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand home" href="index.php">
          <!-- Placeholder for logo -->
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
          <span class="sr-only">Toggle Navigation</span>
          <i class="fa fa-align-justify"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navigation">
        <ul class="nav navbar-nav navbar-left">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="checkout.php">My Account</a></li>
          <li><a href="cart.php">Shopping Cart</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <a href="cart.php" class="btn btn-primary navbar-btn right">
        <i class="fa fa-shopping-cart"></i>
        <span>4 items In Cart</span>
      </a>
      <div class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Slider -->
  <div class="container" id="slider">
    <div class="col-md-12">
      <div class="carousel slide" id="myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="admin_area/slider_images/1.jpg" alt="Slide 1">
          </div>
          <div class="item">
            <img src="admin_area/slider_images/2.jpg" alt="Slide 2">
          </div>
          <div class="item">
            <img src="admin_area/slider_images/3.jpg" alt="Slide 3">
          </div>
          <div class="item">
            <img src="admin_area/slider_images/4.jpg" alt="Slide 4">
          </div>
        </div>
        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#myCarousel" class="right carousel-control" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <div id="advantage">
    <div class="container">
      <div class="row same-height-row">
        <div class="col-sm-4">
          <div class="box same-height">
            <div class="icon">
              <i class="fa fa-heart"></i>
            </div>
            <h3><a href="#">BEST DEALS OVER FOOD</a></h3>
            <p>You can check on all other sites about the prices and then compare with us.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box same-height">
            <div class="icon">
              <i class="fa fa-heart"></i>
            </div>
            <h3><a href="#">100% SATISFACTION GUARANTEED</a></h3>
            <p>We prioritize our customers.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box same-height">
            <div class="icon">
              <i class="fa fa-heart"></i>
            </div>
            <h3><a href="#">WE LOVE OUR CUSTOMERS</a></h3>
            <p>Hygiene and cleanliness are the most important for any food.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Latest Products -->
  <div id="hot">
    <div class="box">
      <div class="container">
        <div class="col-md-12">
          <h2>Latest Food Items</h2>
        </div>
      </div>
    </div>
  </div>
  <div id="content" class="container">
    <div class="row">
      <!-- Product 1 -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="https://tse4.mm.bing.net/th?id=OIP.MiAGrYafshORM2n_HLu4swHaHa&pid=Api&P=0&h=220" class="img-responsive">
          </a>
          <div class="text">
            <h3><a href="details.php">cheese pasta</a></h3>
            <p class="price">INR 299</p>
            <p class="buttons">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i> Add to cart
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- Add additional products here -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="https://tse4.mm.bing.net/th?id=OIP.MiAGrYafshORM2n_HLu4swHaHa&pid=Api&P=0&h=220" class="img-responsive">
          </a>
          <div class="text">
            <h3><a href="details.php">naga pizza</a></h3>
            <p class="price">BDT 500</p>
            <p class="buttons">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i> Add to cart
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="https://tse4.mm.bing.net/th?id=OIP.MiAGrYafshORM2n_HLu4swHaHa&pid=Api&P=0&h=220" class="img-responsive">
          </a>
          <div class="text">
            <h3><a href="details.php">cookies </a></h3>
            <p class="price">BDT 350</p>
            <p class="buttons">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i> Add to cart
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="https://tse4.mm.bing.net/th?id=OIP.MiAGrYafshORM2n_HLu4swHaHa&pid=Api&P=0&h=220" class="img-responsive">
          </a>
          <div class="text">
            <h3><a href="details.php">beverages</a></h3>
            <p class="price">BDT 50</p>
            <p class="buttons">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i> Add to cart
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include("includes/footer.php"); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>