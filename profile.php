<?php
  session_start();
 
  if(!isset ($_SESSION['user'])){
    header ('location:login.php');
  }
   
  $con = mysqli_connect ('localhost',  'root',);
  mysqli_select_db($con, 'users');
  
  $sql= "SELECT * FROM product";
  $result = mysqli_query($con, $sql);

  
  if (isset ($_POST['submit'])){
       
        $product = $_POST["product"];
        $p_name = $product["p_name"];
        $p_list_price = $product["p_list_price"];
        $p_price = $product["p_price"];
        $p_image = $product["p_image"];
      
      
    if (empty($product)){
        $error = "Field is required";
    }
        else {
      $query = "INSERT INTO product (p_name,p_list_price, p_price, p_image) VALUES
       ('$p_name', '$p_list_price', '$p_price', '$p_image');";
      $results = mysqli_query($con, $query);

      if (!$results){
          die  ("Failed");
        }else{
            header("Location:index.php?product-added");
        }
  }      
  }
   
  if (isset($_GET['delete_product'])){
      $dtl_product = $_GET['delete_product'];
      $sqli = "DELETE FROM product WHERE id = $dtl_product";
      $res = mysqli_query($connection,$sqli);
      
      if (!$res){
        die  ("Failed");
      }else{
          header("Location:index.php?product-deleted");
      }
  }

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <Link rel="stylesheet" href="css/style.css">
    <style>
        
        body {
  background-color: rgb(241, 244, 253);

}   

 .heading {
    width: 50%;
    margin: 30px auto;
    text-align: center;
    color: rgb(18, 16, 165);
    background: lavender;
    border: 2px solid rgb(255, 0, 242);
    border-radius: 20px;

}

form {
    width: 50%;
    margin: 30px auto;
    border-radius: 5px;
    padding: 10px;
    background:  lavender;
    border: 1px solid rgb(255, 0, 242);
}

.task_input{
    width: 73%;
    height: 15px;
    padding: 10px;
    border: 1px solid rgb(255, 0, 242);
}

.add_btn{
    height: 39px;
    background:lavender;
    color: rgb(18, 16, 165);
    border:1px solid rgb(255, 0, 242);
    border-radius: 5px;
    padding: 5px 20px;
}

table{
    width: 50%;
    margin:30px auto;
    border-collapse: collapse;
}

tr{
    border-bottom: 1px solid rgb(255, 0, 242);
}

th{
    font-size: 19px;
    color: black;
}

th,td{
    border: none;
    height: 30px;
    padding: 2px;
}

    </style>
</head>
<body>
    <div class="heading">
       <h1>My Profile</h1>
       <?php
          if (isset ($error)){
              echo $error;
          }
       ?>
    </div>

    <form method="post" action="index.php">
        Product Name:<input type="text"  name="product" class="task_input"
         placeholder="Add New Product "/><br><br>

         Product List Price:<input type="text"  name="listprice" class="task_input"
         placeholder="Add New Product List Price "/><br><br>

         Product Price:<input type="text"  name="price" class="task_input"
         placeholder="Add New Product Price "/><br><br>

         Product Image:<input type="text"  name="image" class="task_input"
         placeholder="Add New Product Image"/><br><br>

         <button type="submit" class="add_btn">Add Product &nbsp; <span>&#43;</span></button>
     </form>                       
           
           <div class="table-responsive">
               <table class="table, table-bordered, table-striped, table-hover">
                   <thead>
                       <th>ID</th>
                       <th>Product Name</th>
                       <th>List Price</th>
                       <th>Price</th>
                       <th>Image</th>
                       <th>Delete Product</th>
                   </thead>
                  <tbody>
                       <?php while ($product = mysqli_fetch_assoc($result)){
                              $id = $product["id"];
                              $p_name = $product["p_name"];
                              $p_list_price = $product["p_list_price"];
                              $p_price = $product["p_price"];
                              $p_image = $product["p_image"];
                           }             
                      ?>                      
                    <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $p_name; ?></td>
                            <td><?php echo $p_list_price; ?></td>
                            <td><?php echo $p_price; ?></td>
                            <td><?php echo $p_image; ?></td>
                            <td> <a href="index.php?delete_product=<?php echo $id ?>" class="btn btn-danger">Delete Product</a> </td>
                    </tr>



                         <?php 
                                        
                        ?>
                            </tbody>
                </table>
        </div> 
</body>
</html>