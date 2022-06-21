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
    <title>Sign In</title>

    <script>
        $(document).ready(function()
        {
            $("form").submit(function(event){
                event.preventDefault();
                var email = $("#email").val();
                var password = $("#password").val();
                var submit = $("#submit").val();
                $(".form-message").load("signin-a.php", {
                    email: email,
                    password: password,
                    submit: submit
                })
            });
        });

    </script>

</head>
<body>
    
    <h1>Sign In</h1>
    <form action="signin-a.php" method="POST">
    <div id="form">

    <input id="email" type="text" placeholder="Email" name ="email">
    <br>
    <input id="password" type="password" placeholder="Password"  name ="password">
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