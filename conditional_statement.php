<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conditional_statement.php" method="post">
        <label>Enter Age: </label>
        <input name="age">
    </form>

    
</body>
</html>

<?php
   $age = $_POST["age"];
   if($age>=18){
       echo "You may enter the website";
   }
   elseif($age<=0){
    echo "Enter valid age";
   }
   else{
    echo "You must be 18 or 18+ to enter the website";
   }
?>