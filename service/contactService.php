<?php

include('database.php');



function getALlContacts(): array
{
    $query = " select * from contacts";

    $result = getResultsFromDatabase($query);

    $contacts = array();

    while ($row = mysqli_fetch_array($result)) {
        $contacts[] = array('id' => $row['id'],
            'name' => $row['name'],
            'phone' => $row['phone'],
            'email' => $row['email'],
            'address' => $row['address']);
    }
    return $contacts;
}




function getSingleContact($id): array
{
    $query = " select * from contacts where id=$id";
    $result = getResultsFromDatabase($query);

    $contact = array();

    while ($row = mysqli_fetch_array($result)) {
        $contact[] = ['id' => $row['id'],
            'name' => $row['name'],
            'phone' => $row['phone'],
            'email' => $row['email'],
            'address' => $row['address']];
    }
    return $contact;
}



function addNewContact($contactData): string
{
    $name = $contactData["name"];
    $phone = $contactData["phone"];
    $email = $contactData["email"];
    $address = $contactData["address"];


    $query = "insert into contacts(name, phone, email, address) values ('$name', '$phone', '$email', '$address')";

    $conn = OpenCon();

    if ($conn->query($query) === TRUE) {
        return "inserting was successfully";
    } else {
        return "Error: " . $query . "<br>" . $conn->error;
    }

}


function editEmail($contactData, $id): string
{
    $email = $contactData["email"];
    $query = "UPDATE contacts SET email='$email' Where id='$id' ";

    $conn = OpenCon();

    if ($conn->query($query) === TRUE) {
        return "updating was successfully";
    } else {
        return "Error: " . $query . "<br>" . $conn->error;
    }
}



function editName($contactData, $id): string
{
    $name = $contactData["name"];
    $query = "UPDATE contacts SET name='$name' Where id='$id' ";

    $conn = OpenCon();

    if ($conn->query($query) === TRUE) {
        return "updating was successfully";
    } else {
        return "Error: " . $query . "<br>" . $conn->error;
    }
}
function editPhone($contactData, $id): string
{
    $phone = $contactData["phone"];
    $query = "UPDATE contacts SET phone='$phone' Where id='$id' ";

    $conn = OpenCon();

    if ($conn->query($query) === TRUE) {
        return "updating was successfully";
    } else {
        return "Error: " . $query . "<br>" . $conn->error;
    }
}







function getResultsFromDatabase($query) {
    $conn = OpenCon();
    $result = mysqli_query($conn, $query) or die ("could not query database");
    return $result;
}


