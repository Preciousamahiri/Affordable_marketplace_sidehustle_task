
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

        <form method = "post" action = "userfunction.php">
        <div style="font-size:20px; margin:10px; colour: white;">Signup</div>
               Name: <input id= "text"name= "name" required type="text" placeholder= "Enter your Name" > <br><br>
               User Name: <input id= "text" name= "user" required type= "text" placeholder = "Enter User Name"> <br><br>
               Email: <input id= "text"name= "email" required type= "email" placeholder = "Enter your Email"> <br><br>
               Password: <input id= "text" required type= "password" name= "password" placeholder = "Enter your Password"><br> <br>
               <button  id= "button" type="submit">Signup</button> 
                 <br> <br>
                 <?php echo "Have an Account?"?><br>

         <a href= "login.php"> Login</a>


        </form>
</body>
</html>