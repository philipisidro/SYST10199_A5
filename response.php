<?php
$tryAgain = <a href="http://isidrop.dev.fast.sheridanc.on.ca/a5/">" Try Again"</a>

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
        // 
        $errMSH = "Your username must have letters only!"
        echo $errMSG 
    }else {
        echo "hello " + $_POST["name"] 
    }

function checkEmail(){
    if(empty($_POST["email"])){
        $errMSG = "Enter your email"
        echo $errMSG + $tryAgain
    }else if ($_POST["email"]){
        $errMSG = "Not a valid email"
        echo $errMSG + $tryAgain
    }else  {
        echo "Your email is" + $_POST["email"]
    }
}

function checkPhone(){
    if(empty($_POST["phone"])){
        $errMSG = "Enter your phone number"
        echo $errMSG + $tryAgain
    }else if (preg_match('/^[0-9]{10}+S/'),, {
        $errMSG  = "Not a valid phone number"
    }else {}
}
function checkAge(){
    if(empty($_POST["age"])){
        $errMSG = "Enter your age"
        echo $errMSG + $tryAgain
    } else if ($_POST["age"]){
        $errMSG = "Age must be between 16 and 99"
    }else {
        echo "Your Age is" + $_POST["email"]
    }

}

function checkPassword(){
    if(empty($_POST["password"])){
        $errMSG = "Enter your password"
        echo $errMSG + $tryAgain
    } else if ($_POST){
        $errMSG = "Password must be minimum 8 characters. " + $tryAgain    
    }
}

?>