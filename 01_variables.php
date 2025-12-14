<?php

    // Single line comment in PHP
    # Another single line comment
    /*
        This is a multi-line comment in PHP
        It can span multiple lines.
    */

    /**
     * Variables in PHP
     * A variable in PHP starts with a dollar sign ($) followed by the name of the variable.
     * A variable is used to store data, such as numbers, strings, arrays, or objects.
     * @param mixed $name
    */

    /**
     * Data types in PHP
     * PHP supports several data types including:
     * - String: A sequence of characters enclosed in single or double quotes.
     * - Integer: Whole numbers without a decimal point.
     * - Float (or Double): Numbers with a decimal point.
     * - Boolean: Represents two possible values: true or false.
     * - Array: A collection of values stored in a single variable.
     * - Object: An instance of a class that can contain properties and methods.
      */

    $name = "Ayesha";
    $age = 25;
    $isFather = true;
    $salary = 35;
    $result = 34.4;
    $null_value = null;

    // Print the variables into web
    echo "Hello ";
    echo $name;
echo "<br />";
echo "Is Father: " . $isFather. "<br/>";
echo "Salary: " . $salary;

echo "</br>".gettype($name) . "<br>";
echo gettype($age)."<br>";
echo gettype($isFather)."<br>";
echo gettype($salary)."<br>";
echo gettype($result)."<br>";

echo "------------------------------------------"."</br>";
echo "------------------------------------------"."</br>";

print_r($name);
echo "</br>";
var_dump($name);
echo "</br>";


//  changing the variable types
$name = 0101;
print_r($name);
echo "</br>";
var_dump($name);

echo "</br>";
echo "------------------------------------------"."</br>";
echo "------------------------------------------"."</br>";

var_dump(is_string($name));
echo "</br>";
var_dump(is_int($age));
echo "</br>";
var_dump(is_bool($isFather));
echo "</br>";
var_dump(is_double($result));
echo "</br>";
var_dump(is_null($null_value));
echo "</br>";











