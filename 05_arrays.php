<?php

// Indexed Array
$fruits = ["Apple", "Banana", "Orange"];

echo gettype($fruits[1])." "."$fruits[1] </br>";
$fruits[0] = "Mango";
var_dump($fruits);


// Mixed type array 
$user = [
    "name" => "Tanvir Hossain",
    "age" => 23,
    "is_employee" => true,
    "is_married" => false,
    "country" => "Bangladesh",
    "profile" => [
        "pic" => "https://example.com/tanvir.png",
        "post_code" => 3580
    ]
];

echo "</br>";
echo "</br>";
echo "Profile Picture ".$user["profile"]["pic"];
echo "</br>";
echo "</br>";
echo "Postal Code ".$user["profile"]["post_code"];