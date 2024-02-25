<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="box" style="height: 300px; width: 250px; margin-left: 250px; border-style:solid; border: 10px solid brown; border-radius: 15px; box-shadow: 15px 15px 10px rgba(0, 0, 0, 0.5); margin: 20px; padding: 10px; background: purple;">
        <h1 style="color: white">ID CARD</h1>
        <h3 style="color: black; padding-top: 10px; padding-left: 10px;">
            NAME : Tania <br><br>
            POST : Web Developer <br><br>
            ID NO : 123 <br><br>
            PHONE NO : 012345678 <br><br>
            EMAIL : tania@gmail.com
            <?php
            echo isset($_POST['name']) ? $_POST['name'] : '';
            ?>
        </h3>
    </div>


</body>

</html>