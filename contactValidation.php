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



function validateUpdate($data, $type): bool
{
    if (isset($data[$type])) {
        return true;
    }
    else {
        return false;
    }
}



