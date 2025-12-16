<?php
    
    echo "<pre>";
        var_dump($_FILES);
    echo "</pre>";

    $uploads_dir = "uploads/";
    $contacts_file = "contacts.json";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);


        // var_dump($name, $email, $phone);
        if($name && $email && $phone && isset($_FILES["image"])){

            if(!is_dir($uploads_dir)){
                mkdir($uploads_dir, 0777, true);
            }

            $image_name = time() . "_" . basename($_FILES["image"]["name"]);
            $image_path = "$uploads_dir $image_name";

            if(move_uploaded_file($_FILES['image']['tmp_name'], $image_path)){
            $contacts = file_exists($contacts_file)
                ? json_decode(file_get_contents($contacts_file))
                : [];

                $contacts[] = [
                    "id" => rand(10000000, 20000000),
                    "name" => $name,
                    "email" => $email,
                    "phone" => $phone,
                    "image" => $image_path,
                ];

            

                file_put_contents($contacts_file, 
                json_encode($contacts, JSON_PRETTY_PRINT));

                echo "Contact added: $image_path";
            }else{
                echo "Image upload failed";
            }

            

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