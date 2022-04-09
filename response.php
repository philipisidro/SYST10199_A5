<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>response.php</title>
</head>
<body>
    
    <?php
    $phone = $_POST["userPhone"];
    $age = $_POST["userAge"];
    $password = $_POST["userPassword"];

    validateName();
    validateEmail();
    validatePhone();
    validateAge();
    validatePassword();

    function validateName(){
        $name = $_POST["userName"];
        $pattern = '/^[-a-z\d]/' ;
        clean($name);
        echo $name;
        if (isset($name) && !empty($name)){
            if (preg_match($pattern, $name)){
                echo " it worked";
                return $name;
            }else {
                echo "<h1 class=\"error\">Error: Username can only contain letters</h1>";
            }
        }else {
            echo "<h1 class=\"error\">Error: Input Your Name</h1>";
        };
    }
    function validateEmail(){
        $email = $_POST["userEmail"];
        $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        clean($email);
        echo $email;
        if (isset($email) && !empty($email)){
            if(preg_match($pattern, $email)){
                echo "<h1 class=\"error\">Enter your name! </h1>";
            }else {
                echo "<h1 class=\"error\">Error: Email is invalid</h1>";
            }
        }else {
            echo "<h1 class=\"error\">Error: Input Your Email</h1>";
        }
    }
    function validatePhone(){
        $phone = $_POST["userPhone"];
        $pattern = '/^[0-9]{10}$/';
        clean($phone);
        echo $phone;
        if (isset($phone) && !empty($phone)){
            if(preg_match($pattern, $phone)){
                echo "phone worked";
            }else {
                echo "<h1 class=\"error\">Error: Phone is invalid</h1>";
            }
        }else {
            echo "<h1 class=\"error\">Error: Input Your Phone</h1>";
        }
    }
    function validateAge(){
        $age = $_POST["userAge"];
        echo gettype($age);
        clean($age);
        if (isset($age) && !empty($age)){
            if(($age >= 16) && ($age <= 99)){
                echo "age worked";
            }else {
                echo "<h1>Error: Age is invalid </h1>";
            }
        }else {
            echo "<h1>Error: Input Your Age</h1>";
        }
    }
    function validatePassword(){
        $password = $_POST["userPassword"];
        $pattern = '/^.{8,}$/';
        clean($password);
        echo $password;
        if (isset($password) && !empty($password)){
            if(preg_match($pattern, $password)){
                echo "password worked";
            }else {
                echo "<h1 class=\"error\">Error: Password is invalid</h1>";
            }
        }else {
            echo "<h1 class=\"error\">Error: Input Your Password</h1>";
        }
    }

    function clean($d){
        $data = trim($d);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    };
    
    ?>
</body>
</html>