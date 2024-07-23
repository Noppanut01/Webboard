<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $login = $_POST['login'];
    $password = $_POST['password'];
    echo "<h1 align='center'>Webboard Kakkak</h1>";
    echo "<hr>";
    echo "<div align='center'>เข้าสู่ระบบด้วย<br>
    Login = $login <br>
    Password = $password <br> 
    </div>";
    ?>
</body>

</html>