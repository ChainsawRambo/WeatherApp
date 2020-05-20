<?php

$z = $_GET["zip"];

sleep (2);
$url = "http://api.openweathermap.org/data/2.5/weather?zip=$z,us&units=metric&appid=1b1945fb7ecf093962b19631d1dc5f90"; //Put in my API Code

$fp = fopen ( $url , "r" ); 
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
} 

echo $contents ; 

?>