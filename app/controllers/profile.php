<?php
if (empty($_SESSION)){
    header("Location: ?page=login");
}