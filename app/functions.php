<?php
$page = "";
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}
function include_controller($string)
{

    if ($string !== "") {
        require "controllers/$string.php";


    }
}

function include_template($string)
{
    if ($string == "") {
        require "templates/index.php";
    } else if ($string !== "") {
//        require "controllers/$string.php";

        require "templates/$string.php";
    }
}

function checkAuth()
{
    if (isset($_SESSION['loggedIn'])) {

        if ($_SESSION['loggedIn'] == true) {
//
            return true;
        } else {
//
            return false;
        }
    } else {
        return false;
    }

}
