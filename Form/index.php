<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="show.php" method="POST">
        <label for="">Name</label>
        <input type="text" name="name"> <br><br>
        <label for="">Email</label>
        <input type="email" name="email"> <br><br>
        <label for="">Password</label>
        <input type="password" name="password" id=""><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>



<?php
// echo $GLOBALS['a'] = 15;
// echo $_SERVER['SERVER_SOFTWARE'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['REQUEST_METHOD'];
// echo $_POST['name'];
// echo $_POST['email'];
// echo $_POST['password'];

$pass = 'Hello';
// if ($pass === 'Hello0') {
//     echo 'Match';
// } else {
//     echo 'no';
// }
echo $pass === 'Hello' ? 'match' : 'no';
