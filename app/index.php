<?php
$page = "";
if(!empty($_GET['page'])){
    $page = $_GET['page'];
}

require "templates/header.php";
$title = "Home";
if ($page == ""){
    //main content start
    require "templates/index.php";
    //end main content
}else if($page == "login"){
    require "templates/login.php";
}else if($page == "register"){
    require "templates/register.php";
}
require "templates/aside.php";

//footer start
require "templates/footer.php";