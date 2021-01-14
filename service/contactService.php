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



function getResultsFromDatabase($query) {
    $conn = OpenCon();
    $result = mysqli_query($conn, $query) or die ("could not query database");
    return $result;
}


