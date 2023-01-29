<!DOCTYPE html>
<html>

<head>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:400,800");

        html {
            overflow: hidden;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: hsl(259, 100%, 84%);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: "Montserrat", sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        a {
            color: black;
        }

        input[type="submit"] {
            border-radius: 10px;
            border: 1px solid #2b44ff;
            background-color: #2b44ff;
            color: #ffffff;
            font-size: 14px;
            font-weight: bold;
            width: 150px;
            padding: 15px 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        input[type="submit"]:hover {
            cursor: pointer;
        }

        form {
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            border-radius: 6px;
            background-color: rgb(240, 240, 240);
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            font-size: 13px;
        }

        input:active {
            border: none;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 800px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            left: 50%;
            height: 100%;
        }

        .log-in-container {
            width: 50%;
            z-index: 2;
        }

        .overlay-container {
            position: absolute;
            top: 0;
            width: 50%;
            height: 100%;
        }

        .overlay {
            background: #ff416c;
            background: -webkit-linear-gradient(to right, #ff4b2b, #ff416c);
            background: linear-gradient(to right, #ff4b2b, #ff416c);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #ffffff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
        }

        .overlay-right {
            right: 0;
        }

        .header_logo {
            height: 60px;
        }

        .error {
            color: red;
            font-weight: 550;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Stone Paper Scissors</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form action="validation.php" method="post" name="form" enctype="multipart/form-data">
                <h1>LOGIN</h1>
                <br /><br />
                <input name="id" type="text" placeholder="Username (user1)" /><br />
                <input name="pass" type="password" placeholder="Password (xyxyxy)" /><br />
                <div class="error"></div><br />
                <input type="submit" value="Log In" />
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <img class="left-img" src="images/image_processing20200629-10059-bkvklh.gif" alt="college entrance" />
                </div>
            </div>
        </div>
    </div>
</body>
<?php

if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<script>
            console.log("hello");
            document.getElementsByClassName("error")[0].innerHTML="Please enter valid details !!";
            </script>';
}

?>

</html>