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

    <title>Contact</title>

    <script>
        $(document).ready(function()
        {
            $("form").submit(function(event){
                event.preventDefault();
                var name = $("#name").val();
                var email = $("#email").val();
                var message = $("#message").val();
                var submit = $("#submit").val();
                $(".form-message").load("mail.php", {
                    name: name,
                    email: email,
                    message: message,
                    submit: submit
                })
            });
        });

        

    </script>

</head>


<h1>Contact</h1>

<form action="mail.php" method="POST">
<div id="form">
<input id="name" type="text" placeholder="Your name" name="name">
<br>
<input id="email" type="text" placeholder="Email" name="email">
<br>
<input id="message" type="text" placeholder="Message" name="message">
<br>

<button id="submit" type="submit" name="submit">Submit</button>
<p class="form-message"></p>

</div>
</form>



<?php
require_once("foot.php");
?>
<body>
    
</body>
</html>