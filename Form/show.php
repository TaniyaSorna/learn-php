<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="color: red;">
        Name is:
        <?php
        // if (isset($_POST['name'])) {
        //     echo $_POST['name'];
        // }; 

        echo isset($_POST['name']) ? $_POST['name'] : '';
        ?>
    </h1>
</body>

</html>