<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teehosting E-commerce</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Top Bar -->
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
                    <!--<img src="https://tse2.mm.bing.net/th?id=OIP.RgBttdx5ttxG80P-Of6Z-wHaE8&pid=Api&P=0&h=220" alt="Brand Logo" class="hidden-xs">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.RgBttdx5ttxG80P-Of6Z-wHaE8&pid=Api&P=0&h=220" alt="Brand Logo" class="visible-xs">-->
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

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

    <!-- Content -->
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>

            <div class="col-md-3">
                <?php include("includes/sidebar.php"); ?>
            </div>
<div class="col-md-9">
    <div class="row" id="productmain">
        <div class="col-sm-6">
            <div id="mainimage">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner"><!--start-->>
                        <div class="item active">
                            <center>
                                <img src="https://up.yimg.com/ib/th?id=OIP.JamAim0q8A184-caODx6igHaFj&pid=Api&rs=1&c=1&qlt=95&w=143&h=107" class="img-responsive">
                            </center>
                        </div>
                        <div class="item">
                            <center>
                                <img src="https://tse1.mm.bing.net/th?id=OIP.LoO920LrWxi9GdmweWravAHaFj&pid=Api&P=0&h=220" class="img-responsive">
                            </center>
                        </div>
                        <div class="item">
                            <center>
                                <img src="https://tse2.mm.bing.net/th?id=OIP.bzCVlD2GSns6K9E1S3ODwwHaFq&pid=Api&P=0&h=220" class="img-responsive">
                            </center>
                        </div>
                    </div>
                    <!--end-->>
                    <a href="mycarousel" class="left carousel-control" data-slide="prev">
                    	<span class="glyphicon glyphicon-chevron-left"></span>
                    	<span class="sr-only"> Previous</span>
                    </a>
                    <a href="mycarousel" class="right carousel-control" data-slide="next">
                    	<span class="glyphicon glyphicon-chevron-right"></span>
                    	<span class="sr-only"> Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
    <div class="box">
        <h1 class="text-center">Red velvet cake 1 pound</h1>
        <form action="details.php" method="post" class="form-horizontal">
            <div class="form-group"><!-- form-group Start -->
                <label class="col-md-5 control-label">item quantity</label>
                <div class="col-md-7"><!-- col-md-7 Start -->
                    <select name="product_qty" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div><!-- col-md-7 End -->
            </div><p class="price">INR 200</p>
<p class="text-center buttons">
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-shopping-cart"></i> Add to cart
    </button>
</p>
</form><!-- Form End -->

<div class="row"><!-- Box End -->
    <div class="col-xs-4">
        <a href="#" class="thumb">
            <img src="https://tse2.mm.bing.net/th?id=OIP.bzCVlD2GSns6K9E1S3ODwwHaFq&pid=Api&P=0&h=220">
        </a>
    </div>
    <div class="col-xs-4">
        <a href="#" class="thumb">
            <img src="https://tse2.mm.bing.net/th?id=OIP.bzCVlD2GSns6K9E1S3ODwwHaFq&pid=Api&P=0&h=220">
        </a>
    </div>
    <div class="col-xs-4">
        <a href="#" class="thumb">
            <img src="https://tse2.mm.bing.net/th?id=OIP.bzCVlD2GSns6K9E1S3ODwwHaFq&pid=Api&P=0&h=220">
        </a>
    </div>
</div><!-- form-group End -->
        </form>
    </div>
</div>
    </div>
</div>
</div>
    </div>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>

