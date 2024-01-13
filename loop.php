
<?php
//for loop
  for($i=1;$i<5;$i++){
    echo $i ."<br>";
  }
?>

<?php
//for each

$fruits = array("Apple","Banana","Cherry","Coconut");

foreach($fruits as $f){
   echo $f ."<br>";
}
?>

<?php
$g = 1;
while ($g < 6) {
  echo $g;
  $g++;
}
?>