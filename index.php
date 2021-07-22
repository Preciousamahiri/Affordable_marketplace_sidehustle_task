<?php
session_start();

if(!isset ($_SESSION['user'])){
  header ('location:login.php');
}


$con = mysqli_connect ('localhost',  'root', '');
mysqli_select_db($con, 'users');

$sql= "SELECT * FROM product where featured > 1";
$result = mysqli_query($con, $sql);
//$result= $db->query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Affordable Marketplace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href= "css/style.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" id="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" id= "text" href="#">Affordable Marketplace</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" id= "text"  href="#">Product<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Gowns</a></li>
            <li><a href="#">Skirts</a></li>
            <li><a href="#">Shoes</a></li>
          </ul>
        </li>


         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" id= "text"  href="#">Profile<span class= "glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">Add Product</a></li>
            <li><a href="profile.php">Update Product</a></li>
            <li><a href="profile.php">Delete Product</a></li>


          </ul>
        </li>
        <li><a href="#" id= "text" >Contact</a></li>
        <li><a href="#" id= "text" >About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id= "text" >
        <li><a href="signup.php"><span class="glyphicon glyphicon-user" id= "text" ></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" id= "text" ></span> Login</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" id= "text" ></span> Logout</a></li>
      </ul>
    </div>
    
  </div>
</nav>
<div class= "container">

      <h2>Welcome <?php echo $_SESSION['user'];?><h2>
</div>
<div id="background-image">
    <div id= "image-1"></div>
</div>
     
 <div class="col-md-2"></div>

<div class= "col-md-8">
  <div class = "row">
     <h2 class= "text-center">Featured Products</h2>
                <?php while ($product = mysqli_fetch_assoc($result)){
                              $p_name = $product["p_name"];
                              $p_list_price = $product["p_list_price"];
                              $p_price = $product["p_price"];
                              $p_image = $product["p_image"];
                }             
                ?>

    <div class= "col-md-3">
       <h4><?php echo $p_name; ?></h4>
       <img src="<?php echo $p_image; ?>" alt= "<?php echo $p_name; ?>" id="images">
        <p class= "list-price text-danger">List Price:<s>$<?php echo $p_list_price; ?></s></p>
        <p class= "price"> Our Price:$<?php echo $p_price; ?></p>
        <form action= "<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method= "post">
             <button type= "button" class= "btn btn-warning" type= "submit">
             <span class= "glyphicon glyphicon-shopping-cart"></span>Add To Cart</button> 
        </form>
    </div>

  <div class= "col-md-3">
       <h4><?php echo $p_name; ?></h4>
       <img src="<?php echo $p_image; ?>" alt= "<?php echo $p_name; ?>" id="images">
        <p class= "list-price text-danger">List Price:<s>$<?php echo $p_list_price; ?></s></p>
        <p class= "price"> Our Price:$<?php echo $p_price; ?></p>
        <form action= "<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method= "post">
             <button type= "button" class= "btn btn-warning" type= "submit">
             <span class= "glyphicon glyphicon-shopping-cart"></span>Add To Cart</button> 
        </form>
  </div>


  </div>
  
 <footer class= "text-center" id= "footer">&copy; Copyright 2021 Created by Precious Amahiri</footer>
</div>
</div>
</body>
</html>