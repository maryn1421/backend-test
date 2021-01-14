<?php

// Autoload files using composer
require_once __DIR__ . '/vendor/autoload.php';

// Use this namespace
use Steampixel\Route;

// Add your first route
Route::add('/', function(){
    $myArr = array(
        ["name" => "nem maryn"],["name" => "maryn"]);

    $myJSON = json_encode($myArr);

    echo $myJSON;
});

// Run the router
Route::run('/');