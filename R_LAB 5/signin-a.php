<?php

session_start();

    include("database.php");

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errorEmpty = false;
    $errorEmail = false;
    $errorPassword = false;

    if(empty($email) || empty($password))
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
        $query = "select * from users where user_email = '$email' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)
                {   
                    $_SESSION['user_id'] = $user_data['user_id'];
                    echo"<span class = 'form-success'>You are logged in!</span>";
                    die;
                }
                else
                {
                    echo"<span class = 'form-error'>Your credentials are wrong!</span>";
                    $errorPassword = true;
                }
            }
        }
    }
}
else
{
    echo"There was an error";
}
?>

<script>
    $("#email, , #password").removeClass("input-error");

    var errorEmpty = "<?php echo $errorEmpty?>";
    var errorEmail = "<?php echo $errorEmail?>";
    var errorPassword = "<?php echo $errorEmail?>";
    if(errorEmpty == true)
    {
        $("#email, , #password").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#email").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false && errorPassword == false) {
        $("#email, , #password").val("");
    } 
    if (errorPassword == true) {
        $("#email, , #password").val("");
    }

</script>