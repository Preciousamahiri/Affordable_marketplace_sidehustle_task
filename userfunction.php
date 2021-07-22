<?php
 session_start();
 

 $con = mysqli_connect ('localhost',  'root', '');

 mysqli_select_db($con, 'users');

    $name = $_POST ['name'];
    $user= $_POST ['user'];
    $email= $_POST ['email'];
    $pass = $_POST ['password'];


$query = "SELECT * FROM user WHERE name = '$name'";
$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);
if ($num == 1){
    echo "Username already exist";
}
  
else {
    $reg = " INSERT INTO user (name, user_name, email, password) 
      values ('$name' , '$user', '$email' , '$pass')";
    
    mysqli_query($con, $reg);
    header('location:login.php');
}
