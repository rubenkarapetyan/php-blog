<?php

$page = "";
if(!empty($_GET['page'])){
    $page = $_GET['page'];
}

function include_template($string){
    if($string == ""){
        require "templates/index.php";
    }else if($string !== ""){
        require "controllers/$string.php";
        require "templates/$string.php";
    }


}
