<?php

session_start();

    include("database.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $errorEmpty = false;
    $errorEmail = false;

    if(empty($name) || empty($email) || empty($message))
    {
        echo"<span class = 'form-error'>Fill in all fields!</span>";
        $errorEmpty = true;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        echo"<span class = 'form-error'>Your email address is invalid!</span>";
        $errorEmail = true;
    }
    else
    {
        echo"<span class = 'form-success'>Your form was successfully submited!</span>";
        $query = "insert into contacts(name, email, message) values ('$name', '$email', '$message')";
        mysqli_query($conn, $query);
        
    }
}
else
{
    echo"There was an error";
}
?>


<script>
    $("#name, #email, #message").removeClass("input-error");

    var errorEmpty = "<?php echo $errorEmpty?>";
    var errorEmail = "<?php echo $errorEmail?>";
    if(errorEmpty == true)
    {
        $("#name, #email, #message").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#email").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false) {
        $("#name, #email, #message").val("");
    } 
</script>