<?php

    include 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <title>Sign Up</title>

    <script>
        $(document).ready(function()
        {
            $("form").submit(function(event){
                event.preventDefault();
                var email = $("#email").val();
                var password1 = $("#password1").val();
                var password2 = $("#password2").val();
                var submit = $("#submit").val();
                $(".form-message").load("signup-a.php", {
                    email: email,
                    password1: password1,
                    password2: password2,
                    submit: submit
                })
            });
        });

    </script>



</head>
<body>
    
    <h1>Sign Up</h1>
    <form action="signup-a.php" method="POST">
    <div id="form">

    <input id="email" type="text" placeholder="Email" name ="email">
    <br>
    <input id="password1" type="password" placeholder="Password"  name ="password1">
    <br>
    <input id="password2" type="password" placeholder="Password check" name ="password2">
    <br>

    <button id="submit" type="submit" name="submit">Submit</button>
    <p class="form-message"></p>

    </div>
    </form>


    <?php
    require_once("foot.php");
    ?>
</body>
</html>