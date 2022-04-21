<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","elmer-5683","log_a");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 10; $i++){   
$sql = "INSERT INTO log_a.person(lname, fname, address, logdt) values('".$faker->lastName."','".$faker->firstName."', '".$faker->address."', '".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."')";     

    echo $faker->lastName. "\n";
    echo $faker->firstName. "\n";
    echo $faker->address. "\n";
    echo $faker->date($format= 'Y-m-d H:i:s', $max = 'now'). "\n<br>";

mysqli_query($conn, $sql);}

?>