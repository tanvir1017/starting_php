<?php
$user_id = $_GET["id"];
 if(isset($user_id)){
    $contacts_file = "contacts.json";
    $contacts = file_exists($contacts_file) ? json_decode(file_get_contents($contacts_file), true) : [];


    // remove the contact by id
    $contacts = array_filter($contacts, fn($c) => $c["id"] != $user_id);

    file_put_contents($contacts_file, json_encode($contacts, JSON_PRETTY_PRINT));

    echo "Contact deleted with id $user_id";
 }

