<?php
session_start();
$data = [];
require "db.php";
require "functions.php";
require "config.php";
require "controllers/$page.php";
$data['isAuth'] = checkAuth();
require "templates/header.php";
$title = "Home";
if ($page == "") {
    require "templates/index.php";
} else if ($page !== "") {
//        require "controllers/$string.php";

    require "templates/$page.php";
}
require "templates/aside.php";
//footer start
require "templates/footer.php";