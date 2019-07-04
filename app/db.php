<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, 'blog');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
function get_categories($conn)
{
    $sql = "SELECT id, name FROM categories";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    return $result;
}

function most_popular($conn)
{
    $sql = "SELECT title,publishDate From blog_posts
            ORDER BY views DESC
            LIMIT 3";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    return $result;
}

function recent($conn)
{
    $sql = "SELECT title,publishDate From blog_posts
            ORDER BY publishDate DESC
            LIMIT 3";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    return $result;
}
function custom_posts($conn)
{
    $sql = "SELECT title,publishDate,text From blog_posts
            ORDER BY publishDate DESC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    return $result;
}
function insert_data($data){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connect = new mysqli($servername,$username,$password,"blog");
    $query = "INSERT INTO users (name,email,avatar,password,isActive)
    VALUES($data)";
    mysqli_query($connect, $query);
    var_dump($data);
}