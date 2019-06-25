<?php
session_start();
$data = [];

require "functions.php";
require "config.php";
include_controller($page);
$data['isAuth'] = checkAuth();
require "templates/header.php";
$title = "Home";
include_template("$page");
require "templates/aside.php";
//footer start
require "templates/footer.php";