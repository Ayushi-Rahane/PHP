<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="get" action="form.php">
    <label>Enter name: </label>
    <input name="name">
    <br>
    <br>
    <label>Enter email</label>
    <input name="Email" type="email">
   <br>
   <br>
   <input type="submit" value="Submit">
  </form>    
</body>
</html>
<?php
//first way to print value
  echo $_GET["name"]."<br>";
//second way to print value
   echo "{$_GET["Email"]}<br>"
?>