<?php

function validateNewUser($data): bool
{
    if (isset($data['name']) && (isset($data['phone'])) && (isset($data['email'])) && (isset($data['address']) )) {
        return true;
    }
    else {
        return false;
    }
}



