
<?php
$contacts_file = "contacts.json";
$contacts = file_exists($contacts_file) ? json_decode(file_get_contents($contacts_file), true): [];

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

 <a href="create.php">Add a contact</a>

 <ul>
    <?php foreach($contacts as $contact): ?>

        <li>
            <img 
            src="<?php echo $contact["image"]; ?>" 
            height="250"
            >
            <br/>
            id: <?php echo $contact["id"]; ?> <br/>
            Name: <?php echo $contact["name"]; ?> <br/>
            E-mail: <?php echo $contact["email"]; ?> <br/>
            Phone: <?php echo $contact["phone"]; ?> <br/>

            <a href="delete.php?id=<?php echo $contact["id"]; ?>">Delete</a>
        
        </li>

        <?php  endforeach; ?>
    
 </ul>
</body>
</html>