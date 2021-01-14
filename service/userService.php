<?php

include('database.php');


function getALlContacts(): array
{
    $query = " select * from contacts";
    $conn = OpenCon();
    $result = mysqli_query($conn, $query) or die ("could not query database");

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


