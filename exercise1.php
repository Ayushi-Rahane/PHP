<!--Creating an order page for restraunt-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="exercise1.php" method="post">
    <label>Enter the quantity: </label>
    <br><input name="quantity">
    <input type="submit" value="Total">
  </form>  
</body>
</html>

<?php
$item = "VadaPav";
$price = 15;
$quantity = $_POST["quantity"];
$total_price = $price * $quantity;

echo "You have ordered {$quantity} {$item}<br>";
echo "Total price is: INR {$total_price}";
?>