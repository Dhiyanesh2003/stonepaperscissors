<?php

session_start();
$id = $_SESSION["id"];
$score = $_SESSION["score"];
$_SESSION["id"] = $id;

echo "<input class='idd' value='" . $id . "' disabled hidden/>";

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

$sql = "SELECT * FROM details where name='" . $id . "';";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $sc = $row['highscore'];
        if ($score < $sc) {
            $conn->close();
            header("Location: home.php");
            exit();
        } else {
            $sql = "UPDATE details SET highscore='".$score."' WHERE name='".$id."'";

            if ($conn->query($sql) === TRUE) {
                $conn->close();
                header("Location: home.php");
                exit();
            }
            $conn->close();
        }
    }
}

header("Location: computer.php");
