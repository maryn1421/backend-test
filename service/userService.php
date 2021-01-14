<?php

include('database.php');


public function getAllUser() {
    $query = " select * from users";
    $result = mysqli_query($conn, $query) or die ("could not query database");


}