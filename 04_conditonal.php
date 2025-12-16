<?php


 /**
  * Conditional Statements
  * If-else + comparison operators
 */

 // == 
 // ===
 // != or <>
 // !==
 // <
 // >
 // <=
 // >=

 // Logical Operators
// && -  and
// || - or
// ! - not

//  Switch statement
$age = 18;
if(isset($age)){
    if ( $age <= 12){
        echo "You are a child";
    }else if($age >= 18){
        echo "You are an adult. Go get married!";
    }else{
        echo "Tui buira beta hoisos na!!";
    }
}else{
    echo "Age is not defined!!";
}
