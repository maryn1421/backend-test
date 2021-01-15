<?php

// Autoload files using composer
require_once __DIR__ . '/vendor/autoload.php';

include_once('./service/contactService.php');
include_once('contactValidation.php');


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

Route::add('/contact/add', function () {
    $decoded_input = json_decode(file_get_contents("php://input"), true);
    header('Content-type: application/json');
    if (validateNewUser($decoded_input)) {
        echo  addNewContact($decoded_input);
    }
    else {
        echo 'invalid input';
    }
}, 'put');

Route::add('/edit/email/([0-9]*)', function($id){
    $decoded_input = json_decode(file_get_contents("php://input"), true);
    header('Content-type: application/json');
    if (validateUpdate($decoded_input, 'email')) {
        echo  editEmail($decoded_input, $id);
    }
    else {
        echo 'invalid input';
    }

}, 'put');

Route::add('/edit/name/([0-9]*)', function($id){
    $decoded_input = json_decode(file_get_contents("php://input"), true);
    header('Content-type: application/json');
    if (validateUpdate($decoded_input, 'name')) {
        echo  editName($decoded_input, $id);
    }
    else {
        echo 'invalid input';
    }

}, 'put');

Route::add('/edit/phone/([0-9]*)', function($id){

}, 'put');

Route::add('/edit/address/([0-9]*)', function($id){

}, 'put');








// Run the router
Route::run('/');