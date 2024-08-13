<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database 'myDB' created successfully or already exists <br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("myDB");

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(6)  PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'user' created successfully or already exists <br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get form data
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];
$action = $_POST['action'];
$name = $_POST['name'];

if ($action == "Create") {
    // Insert (Create) operation
    $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
    }

}  elseif ($action == "Update" && !empty($id)) {
    // Update operation (updating name, email, and password based on id)
    $sql = "UPDATE user SET name='$name', email='$email', password='$password' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully <br>";
    } else {
        echo "Error updating record: " . $conn->error . "<br>";
    }

} elseif ($action == "Delete" && !empty($id)) {
    // Delete operation (deleting a record based on id)
    $sql = "DELETE FROM user WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully <br>";
    } else {
        echo "Error deleting record: " . $conn->error . "<br>";
    }

} else {
    echo "Invalid operation or missing ID for Update/Delete.";
}
}
// Close the connection
$conn->close();
?>
