<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS myDB";
    if ($conn->query($sql) === TRUE) {
        echo "Database 'myDB' created successfully or already exists <br>";
    } else {
        echo "Error creating database: " . $conn->error . "<br>";
    }

    $conn->select_db("myDB");

    $sql = "CREATE TABLE IF NOT EXISTS user (
        id INT(6) UNSIGNED AUTO_INCREMENT,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL,
        PRIMARY KEY (id)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table 'user' created successfully or already exists <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }

    $sql = "INSERT INTO user (name, email, password) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["password"]."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
    }

    $conn->close();
?>