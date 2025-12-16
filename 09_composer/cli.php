<?php

require "vendor/autoload.php";

use Tanvir1017\first_app\Models\Models;
use Tanvir1017\first_app\MyApp;




$my_app = new MyApp();
$my_app->run("Tanvir Hossain");


// use GuzzleHttp\Client;

// $client = new Client();

// $response = $client->request("GET", "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd");

// $body = $response->getBody();
// $data = json_decode($body);

// echo "Bitcoin price in USD: " . $data->bitcoin->usd."\n";


$models = new Models();
$models->check();