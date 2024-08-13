<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "webtech";

    $conn = new mysqli($host, $user, $pass, $dbname);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    $sql = "INSERT INTO lab4a (name, email, username, password) VALUES 
    ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["username"]."', '".$_POST["password"]."')";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>