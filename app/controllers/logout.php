<?php
function logout(){
    $_SESSION = [];
}
logout();
header("Location: ?page=profile");
