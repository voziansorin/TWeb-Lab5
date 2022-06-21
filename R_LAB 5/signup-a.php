<?php

session_start();

    include("database.php");

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $errorEmpty = false;
    $errorPassword = false;
    $errorEmail = false;

    if(empty($email) || empty($password1) || empty($password2))
    {
        echo"<span class = 'form-error'>Fill in all fields!</span>";
        $errorEmpty = true;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        echo"<span class = 'form-error'>Your email address is invalid!</span>";
        $errorEmail = true;
    }
    else if ($password1 !== $password2) 
    {
        echo"<span class = 'form-error'>Your passwords don't match!</span>";
        $errorPassword = true;
    }
    else
    {
        echo"<span class = 'form-success'>Your form was successfully submited!</span>";
        $user_id = random_num(11);
        $query = "insert into users(user_id, user_email, password) values('$user_id', '$email', '$password1')";

        mysqli_query($conn, $query);
        
    }
}
else
{
    echo"There was an error";
}


function random_num($length)
{

    $text = "";
    if($length < 5)
    {
        $length = 5;
    }
    $len =  rand(4, $length);
    for ($i=0; $i < $len; $i++) { 
        $text .= rand(0, 9);
    }
    return $text;
}
?>


<script>
    $("#email, , #password1, #password2").removeClass("input-error");

    var errorEmpty = "<?php echo $errorEmpty?>";
    var errorEmail = "<?php echo $errorEmail?>";
    var errorPassword = "<?php echo $errorPassword?>";
    if(errorEmpty == true)
    {
        $("#email, , #password1, #password2").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#email").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false) {
        $("#email, , #password1, #password2").val("");
    } 
    if (errorPassword == false) {
        $("#password1, #password2").val("");
    }

    $("#email, , #password1, #password2").val("");
 
</script>