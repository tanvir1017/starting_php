<?php

 echo "<h1>Functions</h1>";
 echo "<hr/>";
 echo "<br/>";


 // Simple Function
 function sayHello(){
    echo "Hello World!";
 }
 sayHello();

 // With Parameter
function greet($name){
    echo "<br/>"."Hello $name";
}
greet("Tanvir Hossain"); // output: Hello Tanvir Hossain

 // With Default Parameter
function defParams($name = "Guest"){
    echo "<br/>"."Hello $name";
}
defParams();
defParams("Fayzul Karim");






























// ((name) => do something)("Tanvir")








