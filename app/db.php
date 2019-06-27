<?php


function insert_data($name,$email,$avatar,$pass,$isActive,$dataName){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connect = new mysqli($servername,$username,$password,"blog");
//   $sql = "INSERT INTO $dataName (name,email,avatar,password,isActive)
//    VALUES($data[0],$data[1],$data[2],$data[3],$data[4])";
    $sql = "INSERT INTO $dataName (name, email, avatar,password,isActive)
VALUES ('$name','$email','$avatar','$pass','$isActive')";
    if ($connect->query($sql) === TRUE) {
        $last_id = $connect->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

}
