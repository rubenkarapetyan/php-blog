<?php
require "templates/header.php";
$page = "";
$title = "Home";
if ($page == ""){
    //main content start
    require "templates/index.php";
    //end main content
}
//footer start
require "templates/footer.php";
