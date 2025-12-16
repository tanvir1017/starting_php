<?php
$pdo = require 'db.php';

 if($_GET['id']){
   $contactId = $_GET['id'];

    // Fetch the contact to get the image path
   $stmt = $pdo->prepare("SELECT image FROM contacts WHERE id = :id");
   $stmt->execute([":id" => $contactId]);
   $contact = $stmt->fetch(PDO::FETCH_ASSOC);


   // Delete the file first
   if($contact && $contact["image"]){
      $imagePath = 'uploads/' . $contact["image"];
      if(file_exists($imagePath)){
         unlink($imagePath);
      }
   }
   // Delete the contact from the database

   $stmt = $pdo->prepare("DELETE FROM contacts WHERE id = :id");
   $stmt->execute([":id" => $contactId]);

   echo "Contact deleted with id $contactId";
 }

