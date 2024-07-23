<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $id = $_GET['id'];
    echo "<h1 align='center'>Webboard Kakkak</h1>";
    echo "<hr>";
    echo "<p align='center'>ต้องการดูกระทู้หมายเลข $id</p>";
    echo "
    <table style='border: 2px solid; width: 40%;'>
    <tr>
        <td id='headTable' align='center'>แสดงความคิดเห็น</td>
    </tr>
    <tr>
        <td align='center'><textarea name='' id=''></textarea></td>
    </tr>
    <tr>
        <td align='center'><input type='submit' value='ส่งข้อความ'></td>
    </tr>
    </table>
    ";
    echo "<p align='center'><a href='index.html'>กลับไปหน้าหลัก</a></p>";
    ?>
</body>

</html>