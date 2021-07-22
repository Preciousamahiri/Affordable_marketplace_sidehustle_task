<?php

session_start();

$email_error = $password_error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $password = "";

   
    if (empty($_POST["email"])) {
        $email_error = "The email field is required";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    if (empty($_POST["password"])) {
        $password_error = "The password field is required";
    } else {
        $password = trim(htmlspecialchars($_POST["password"]));
    }

    
    if (!$email_error || !$password_error) {
        
        if (isset($_SESSION["user"]) && in_array($email, $_SESSION["user"])) {
            
            if (strcasecmp($password, $_SESSION["user"]["password"]) === 0) {
               
                header("Location: index.php");
               
            } else {
                $email_error = "You have passed incorrect credentials";
            }
        }
    }
}
if (isset($_SESSION["user"]))  ?>
    <script>
        alert("You may now login");
    </script>
<?php 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
        <style type="text/css">
         #text{
           height: 25px;
           border-radius: 5px;
           padding: 4px;
           border: solid thin #aaa;
           width:100%;
           background-color: white;
         }

         #button{
           padding: 10px;
           width: 100px;
           color: white;
           background-color: blue;
           border: none;
         }

         #box{
           background-color: violet;
           margin: auto;
           width: 300px;
           padding:20px;
         }

        </style>
<div id="box">
<form method = "post" action = "connection.php">
      <div style="font-size:20px; margin:10px; colour: white;">Login</div>
               User Name: <input id= "text" name= "user" required type= "text" placeholder = "Enter User Name"> <br><br>
               Password: <input  id= "text" required type= "password" name= "password" placeholder = "Enter your Password"><br> <br>
               <button  id= "button" type="submit"> Login </button> 
                 <br> <br>
                 <?php echo "Don't have an Account?"?><br>

         <a href= "signup.php"> Signup </a>
        </form>

 </div>
</body>
</html>