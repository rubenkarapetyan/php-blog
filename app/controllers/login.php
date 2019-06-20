<?php
$email= "valod@example.com";
$pass = "123456aaa";
$errors = [];
if (!empty($_POST)){

    if (empty($_POST["email"])){
        $errors["email"] = "please fill out your email";
    }else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Invalid email format";
    }else if($_POST["email"] != $email){
        $errors["password"] = "wrong email or password entered";
    }
    if (empty($_POST["password"])){
        $errors["password"] = "please fill out your password";
    }else if (strlen($_POST["password"]) <= 8) {
        $errors["password"] = "Password will contain letters and numbers, and more than 8 characters";
    } else if($_POST["password"] != $pass){
        $errors["password"] = "wrong email or password entered";
    }
//   if ($_POST["email"] == $email && $_POST['password'] == $pass){
//       header("Location:/app/templates/profile.php");
//   }
}
