<?php

echo "<h1>Loops</h1>";
echo "<hr/>";
echo "<br/>";

// For Loop
for ($i = 0; $i <= 10; $i++){
    echo $i." ";
}

// While Loop
$i = 1;
echo "</br>";
while($i <= 10){
    echo $i." ";
    $i++;
}

$i = 2;
echo "</br>";
while($i <= 10){
    echo $i." ";
    $i++;
}

$i = 3;
echo "</br>";
while($i <= 10){
    echo $i." ";
    $i++;
}

// Foreach Loop
echo "</br>";
echo "</br>";
$fruits = ["Apple", "Banana", "Mango"];
foreach($fruits as $fruit){
    echo " ".$fruit;
}