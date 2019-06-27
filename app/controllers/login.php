<?php
$email = "valod@example.com";
$pass = '$2y$10$xo/3wpA1wXnC9e8DTKmc4Ohtf6kFUd.iT6cly..DEiumNU91t7Oe6';
$errors = [];
if(!empty($_SESSION)){
    header("Location: ?page=profile");
}
if (!empty($_POST)) {
    if (password_verify($_POST['password'], ADMIN_PASS ) && $_POST['email'] == ADMIN_LOGIN ) {
            $_SESSION['user'] = $_POST['email'];
            $_SESSION['loggedIn'] = true;
            header("Location: ?page=dashboard");
    }else if (empty($_POST["email"])) {
        $errors["email"] = "please fill out your email";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    } else if ($_POST["email"] != $email) {
        $errors["password"] = "wrong email or password entered";
    }
    if (empty($_POST["password"])) {
        $errors["password"] = "please fill out your password";
    } else if (strlen($_POST["password"]) <= 8) {
        $errors["password"] = "Password will contain letters and numbers, and more than 8 characters";
    } else if (!password_verify($_POST['password'], $pass)) {

        $errors["password"] = "wrong email or password entered";
    } else if (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $_POST["password"])) {
        $errors["password"] = "Password will contain letters and numbers, and more than 8 characters";
    } else if (empty($errors)) {
        $_SESSION['user'] = $_POST['email'];
        $_SESSION['loggedIn'] = true;
        header("Location: ?page=profile");
    }
}
