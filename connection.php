<?php
 session_start();
 
 $con = mysqli_connect ('localhost',  'root', '');

 mysqli_select_db($con, 'users');
    
    $user = $_POST ['user'];
    //$name = $_POST ['user'];
    //$user= $_POST ['user'];
    $pass = $_POST ['password'];


$query = "SELECT * FROM user WHERE name = '$user' && password = '$pass'";
$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);
if ($num == 1){
     $_SESSION['user'] = $user;
       header("location:index.php");
}else {
   header ('location:login.php');
}
