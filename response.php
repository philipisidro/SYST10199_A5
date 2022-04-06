<?php

checkName()
checkEmail()
checkPhone()
checkAge()
checkPassword()

function checkName(){
    if(empty($_POST["name"])){
        $errMSG = "Enter Your Name"
        echo $errMSG
    }else if (!preg_match("/^([a-zA-Z' ]+)$/"), ($_POST["name"])){
        $errMSH = "Your username must have letters only!"
        echo $errMSG 
    }else {
        echo "hello " + $_POST["name"] 
    }

function checkEmail(){
    if(empty($_POST["email"])){
        $errMSG = "Enter your email"
        echo $errMSG
    }else if ($_POST["email"]){

    }else  {
        echo "Your email is" + $_POST["email"]
    }
}

function checkPhone(){
    if(empty($_POST["phone"])){
        $errMSG = "Enter your phone number"
        echo $errMSG
    }else if ($_POST){
        
    }else {}
}
function checkAge(){
    if(empty($_POST["age"])){
        $errMSG = "Enter your age"
        echo $errMSG
    } else if ($_POST["age"]){

    }else {
        echo "Your email is" + $_POST["email"]
    }

}

function checkPassword(){
    if(empty($_POST["password"])){
        $errMSG = "Enter your password"
        echo $errMSG
    } else if ($_POST){
        echo "Your email is" + $_POST["email"]
    }
}

?>