<?php

require('vendor/autoload.php');
$faker = Faker\factory::create('en_PH');

for ($i=1; $i < 101; $i++){
    $email = $faker->email;
    $lastName = $faker->lastName;
    $firstName = $faker->firstName;
    $userName = $faker->userName;
    $password = $faker->password($minLength = 6, $maxLenght = 20);

    echo "$i, $email, $lastName, $firstName, $userName, $password";

}
?>