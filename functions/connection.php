<?php

function dbConnect(){
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database = "blog_portfolio";


    $conn = new mysqli($server_name, $username, $password, $database);

    if($conn->connect_error){
        die("ERROR CONNECTING TO DATABASE");
    }else{
        return $conn;
    }
}



?>