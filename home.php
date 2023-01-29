<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stone Paper Scissors</title>
    <style>
        .container {
            margin-left: 10%;
            margin-right: 10%;
            display: flex;
            justify-content: center;
            margin-top: 120px;
        }

        .computer {
            margin-right: 50px;
            text-decoration: none;
            color: black;
        }

        .human {
            text-decoration: none;
            color: black;
        }

        img {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            width: 300px;
            height: 300px;
        }

        .high {
            color: #2b44ff;
            font-size: 35px;
        }

        .score {
            font-size: 35px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $id = $_SESSION["id"];
    echo "<input class='idd' value='" . $id . "' disabled hidden />";

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

    $sql = "SELECT * FROM details where name = '" . $id . "';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $highscore  = $row['highscore'];
        }
    }
    echo "<div class='highscore'><center><h3><span class='high'>High Score : </span><span class='score'>" . $highscore . "</span>";
    $_SESSION["id"] = $id;
    ?>
    </h3>
    </center>
    </div>
    <div class="container">
        <a class="computer" href="computer.php">
            <img src="images/computer.png" alt="computer" />
            <center>
                <figcaption>
                    <h2>Play with computer</h2>
                </figcaption>
            </center>
        </a>
        <a class="human" href="human.php">
            <img src="images/human.jpg" alt="human" />
            <center>
                <figcaption>
                    <h2>Play with human</h2>
                </figcaption>
            </center>
        </a>
    </div>
</body>
</html>