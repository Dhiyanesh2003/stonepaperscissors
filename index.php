<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assests/css/style.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <title>Login | Portal</title>
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
                        <img
                            class="left-img"
                            src="images/image_processing20200629-10059-bkvklh.gif"
                            alt="college entrance"
                        />
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php

        if ( isset($_GET['success']) && $_GET['success'] == 1 ){
            echo '<script>
            console.log("hello");
            document.getElementsByClassName("error")[0].innerHTML="Please enter valid details !!";
            </script>';
        }

    ?>
</html>
