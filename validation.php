<?php

$id = $_POST['id'];
$pass = $_POST['pass'];

//MySQL connection

$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "players";

// Create connection
$conn = new mysqli($servername, $username, $passwordd, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM details";
$result = $conn->query($sql);
session_start();
$_SESSION["id"] = $id;

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $id_ = $row['name'];
        $pass_ = $row['pass'];
        if (($id == $id_) && ($pass == $pass_)) {
            $conn->close();
            header("Location: home.html");
            exit();
        }
    }
}

header("Location: index.php?success=1");

?>