<?php

$email = $_POST["userEmail"];
$phone = $_POST["userPhone"];
$age = $_POST["userAge"];
$password = $_POST["userPassword"];

validateName();

function validateName(){
    $name = $_POST["userName"];
    if (isset($name) && !empty($name)){
        if (preg_match('[a-zA-Z]', $name)){
            clean($name);
            return $name;
        }else {
            echo "<h1>Error: Username can only contain letters</h1>";
        }
    } else {
        echo "<h1>Error: Input Your Name</h1>";
    };
}




function clean($d){
    $data = trim($d);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};