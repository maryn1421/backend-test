<?php

// Autoload files using composer
require_once __DIR__ . '/vendor/autoload.php';

// Use this namespace
use Steampixel\Route;

// Add your first route
Route::add('/contacts', function(){
    include_once('./service/contactService.php');


    $contacts = getALlContacts();


    $myJSON = json_encode($contacts);

    echo $myJSON;
});
Route::add('/contact/([0-9]*)', function($id){

});


// Run the router
Route::run('/');