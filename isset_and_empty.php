<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_and_empty.php" method="post">
     <label>Enter username</label>
     <input name="username">
     <br>
     <br>
     <label>Enter password</label>
     <input name="password" type="password">
     <br>
     <br>
     <input type="submit" value="Log in" name="login">
     
    </form>
</body>
</html>

<?php
// isset() is true if variable is declared and it is not null;
//empty() is true if is not declared or it is null
   $username = $_POST["username"];
   $password = $_POST["password"];
   $login = $_POST["login"];
   
   if(empty($username) || empty($password)){
    echo "Enter your credentials";
   }
   else if (isset($username) && isset($password))
   {
    echo"login successful";
   }
  
 
?>