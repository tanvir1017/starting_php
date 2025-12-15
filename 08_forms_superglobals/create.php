<?php
    // var_dump($_GET["name"]);
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);


        // var_dump($name, $email, $phone);
        if($name && $email && $phone){
            echo "Contact added: $name ($email, $phone)";
        }else{
            echo "<div>Invalid input!</div>";
        }

    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms & Superglobals</title>
</head>
<body>
<?php

echo "<h1>Forms & Superglobals</h1>";
echo "<hr/>";
echo "<br/>";
?>

<form  method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" />
    <br/>
    <label>E-mail:</label>
    <input type="email" name="email" />
    <br/>
    <label>Contact Image:</label>
    <input type="file" name="image" accept="image/*" required />
    <br/>
    <label>Phone:</label>
    <input type="text" name="phone" />
    <br/>

    <button type="submit" > Add contact </button>
</form>
</body>
</html>