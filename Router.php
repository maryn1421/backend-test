<?php

// Autoload files using composer
require_once __DIR__ . '/vendor/autoload.php';

include_once('./service/contactService.php');


// Use this namespace
use Steampixel\Route;

// Add your first route
Route::add('/contacts', function(){


    $contacts = getALlContacts();


    $myJSON = json_encode($contacts);

    echo $myJSON;
});
Route::add('/contact/([0-9]*)', function($id){

    $contact = getSingleContact($id);

    $myJSON = json_encode($contact);

    echo $myJSON;

});


// Run the router
Route::run('/');