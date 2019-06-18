<?php
$errors = [];
if (!empty($_POST)) {
    if (empty($_POST["name"])) {
        $errors["name"] = "please fill out your name";
    } else if (strlen($_POST["name"]) <= 3) {
        $errors["name"] = "Name will contain more than 3 letters";
    }
    if (empty($_POST["email"])) {
        $errors["email"] = "please fill out your email";
    }else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Invalid email format";
    }
    if (empty($_POST["password"])) {
        $errors["password"] = "please fill out your password";
    } else if (strlen($_POST["password"]) <= 8) {
        $errors["password"] = "Password will contain letters and numbers, and more than 8 characters";
    } else if (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $_POST["password"])) {
        $errors["password"] = "Password will contain letters and numbers, and more than 8 characters";
    }
}
