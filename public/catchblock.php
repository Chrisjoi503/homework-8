<?php

function username($user){
try {
        if (strlen($user)>8){
            throw new Exception("User must be 8 charcters max");
        }
echo "Registered";
    }catch (Exception $e){

    echo "Notice:" . $e->getMessage();

    }
}
// echo "Enter a username";
$user= readline("Enter a username: ");
username($user);