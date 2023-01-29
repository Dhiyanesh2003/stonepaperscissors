<?php

$h = (int)$_POST['h'];
$c = (int)$_POST['c'];

session_start();
$id = $_SESSION["id"];


$_SESSION["id"] = $id;
$_SESSION["score"] = $h;

if ($h < $c) {
    echo "
    <style>
        body {
            background-image: url('images/loose.gif');
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            color: white;
            text-align: center;
            font-size: 200px;
            margin-top: 200px;
        }
        input[type='submit']{
            text-decoration: none;
            color: white;
            background-color: #2b44ff;
            border-radius: 10px;
            border: none;
            padding: 10px;
            font-size: 30px;
            position: absolute;
            right: 50px;
            bottom: 50px;
        }
        input[type='submit']:hover{
            cursor: pointer;
        }
    </style>
    <body>
        <h1>You LOOSE !!</h1>
        <form action='backend.php' method='post' name='form' enctype='multipart/form-data'>
            <input class='idd' name='id' value='" . $id . "' disabled hidden />
            <input type='submit' value='Back to Home >'>
        </form>
    </body>
    ";
} else {
    echo "
    <style>
    body {
        background-image: url('images/won.gif');
        background-repeat: no-repeat;
        background-size: cover;
    }
    h1{
        color: white;
        text-align: center;
        font-size: 200px;
        margin-top: 200px;
    }
    input[type='submit']{
        text-decoration: none;
        color: white;
        background-color: #2b44ff;
        border-radius: 10px;
        border: none;
        padding: 10px;
        font-size: 30px;
        position: absolute;
        right: 50px;
        bottom: 50px;
    }
    input[type='submit']:hover{
        cursor: pointer;
    }
    </style>
    <body>
        <h1>You WON !!</h1>
        <form action='backend.php' method='post' name='form' enctype='multipart/form-data'>
            <input class='idd' name='id' value='" . $id . "' disabled hidden />
            <input type='submit' value='Back to Home >'>
        </form>
    </body>
    ";
}

sleep(5);
//header("Location: backend.php");
