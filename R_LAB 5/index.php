<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Encrypt-decrypt</title>
</head>
<body>

    <h3>
        Chose needed cipher. You will be redirected to a page with an online ecryptor 
        and decryptor
    </h3>

    <div id="container">
        <button><a href="caesar.php">Caesar cipher</a></button>
        <button><a href="vernam.php">Vernam cipher</a></button>
        <button><a href="vigenere.php">Vigenere cipher</a></button>
    </div>

    <?php
    require_once("foot.php");
    ?>

</body>
</html>