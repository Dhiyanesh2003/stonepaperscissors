<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        .container {
            margin-left: 10%;
            margin-right: 10%;
            display: flex;
            justify-content: center;
            margin-top: 70px;
        }

        .cont {
            margin-left: 10%;
            margin-right: 10%;
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .human {
            margin-right: 50px;
            text-decoration: none;
            color: black;
        }

        .computer {
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

        .h1 {
            color: #2b44ff;
            text-align: center;
        }

        .s1 {
            color: red;
        }

        .s2 {
            color: green;
        }

        .stone,
        .paper {
            margin-right: 20px;
        }

        button {
            width: 200px;
            height: 200px;
            background-color: inherit;
            border: none;
        }

        button:hover {
            cursor: pointer;
        }

        button>img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        input[type=submit] {
            font-size: 20px;
            padding: 20px;
            background-color: red;
            color: white;
            border-radius: 8px;
            border: none;
            position: absolute;
            right: 10px;
            bottom: 10px;
        }

        input[type=submit]:hover {
            cursor: pointer;
        }

        #h {
            position: absolute;
            left: 200px;
            top: 280px;
            border: 2px solid;
            border-radius: 10px;
            font-size: 28px;
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: black;
            color: white;
            font-weight: 750;
        }

        #c {
            position: absolute;
            right: 200px;
            top: 280px;
            border: 2px solid;
            border-radius: 10px;
            font-size: 28px;
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: black;
            color: white;
            font-weight: 750;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $id = $_SESSION["id"];
    echo "<input class='idd' value='" . $id . "' disabled hidden />";
    echo "<h1 class='h1'>" . $id . "<span class='s1'> VS </span><span class='s2'>Computer</span></h1>";
    $_SESSION["id"] = $id;
    ?>

    <div class="container">
        <div class="human">
            <img id="left" src="images/blank.png" alt="0" />
        </div>
        <div class="computer">
            <img id="right" src="images/blank.png" alt="0" />
        </div>
    </div>
    <div class="cont">
        <button class="stone" onclick="stone()">
            <img src="images/stone.jpg" alt="stone" />
        </button>
        <button class="paper" onclick="paper()">
            <img src="images/paper.jpg" alt="paper" />
        </button>
        <button class="scissor" onclick="scissor()">
            <img src="images/scissor.jpg" alt="scissor" />
        </button>
    </div>
    <form action="result.php" method="post" name="form" enctype="multipart/form-data">
        <input type="text" name="h" id="h" value="0" />
        <input type="text" name="c" id="c" value="0" />
        <input type="submit" value="End Game">
    </form>
</body>

<script>
    var score = 0;

    function opponent() {
        id = Math.floor(Math.random() * 3);
        if (id == 0) {
            document.getElementById("right").src = 'images/stone-right.jpg';
            document.getElementById("right").alt = '1';
        } else if (id == 1) {
            document.getElementById("right").src = 'images/paper-right.jpg';
            document.getElementById("right").alt = '2';
        } else {
            document.getElementById("right").src = 'images/scissor-right.jpg';
            document.getElementById("right").alt = '3';
        }
    }

    function reset() {
        document.getElementById("h").style.background = "black";
        document.getElementById("c").style.background = "black";
    }

    function draw() {
        document.getElementById("h").style.background = "orange";
        document.getElementById("c").style.background = "orange";
        window.setTimeout(reset, 600);
    }

    function win() {
        document.getElementById("h").style.background = "green";
        document.getElementById("c").style.background = "green";
        var curr_h = parseInt(document.getElementById("h").value);
        document.getElementById("h").value = curr_h + 1;
        window.setTimeout(reset, 600);
    }

    function loose() {
        document.getElementById("h").style.background = "red";
        document.getElementById("c").style.background = "red";
        var curr_c = parseInt(document.getElementById("c").value);
        document.getElementById("c").value = curr_c + 1;
        window.setTimeout(reset, 600);
    }

    function validate() {
        var human = document.getElementById("left").alt;
        var computer = document.getElementById("right").alt;
        if (human == 1 && computer == 1) {
            draw();
        } else if (human == 1 && computer == 2) {
            loose();
        } else if (human == 1 && computer == 3) {
            win();
        } else if (human == 2 && computer == 1) {
            win();
        } else if (human == 2 && computer == 2) {
            draw();
        } else if (human == 2 && computer == 3) {
            loose();
        } else if (human == 3 && computer == 1) {
            loose();
        } else if (human == 3 && computer == 2) {
            win();
        } else if (human == 3 && computer == 3) {
            draw();
        }
    }

    function stone() {
        opponent();
        document.getElementById("left").src = 'images/stone-left.jpg';
        document.getElementById("left").alt = '1';
        validate();
    }

    function paper() {
        opponent();
        document.getElementById("left").src = 'images/paper-left.jpg';
        document.getElementById("left").alt = '2';
        validate();
    }

    function scissor() {
        opponent();
        document.getElementById("left").src = 'images/scissor-left.jpg';
        document.getElementById("left").alt = '3';
        validate();
    }
</script>

</html>