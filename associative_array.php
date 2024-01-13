<?php
//Array that are stored in key=>value pair is known as associative array
$capital = array("Maharashtra"=>"Mumbai",
                  "Gujarat"=>"Gandhinagar",
                  "Tamil Nadu"=>"Chennai");

echo $capital["Gujarat"];

foreach($capital as $key=> $value){
   echo"{$key} = {$value} <br>";
} 
?>