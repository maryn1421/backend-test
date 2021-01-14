<?php
function OpenCon(): mysqli
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "backend_test_db";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    if (!$conn->query("DESCRIBE contacts")) {
        include_once('./database/createContactsTable.php');



    }
    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}



