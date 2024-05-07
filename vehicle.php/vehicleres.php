<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle</title>
</head>

<body>
    <form action="vehicle.php" method="post" enctype="multipart/form-data">
        User Id: <input type="number" name="user_id" placeholder="user_idvs">
        Type : <br>
        <input type="radio" name="type" value="Two Wheeler"> Two Wheeler <br>
        <input type="radio" name="type" value="Four Wheeler"> Four Wheeler <br>

        Brand <input type="text" name="brand"><br>

        Color <input type="text" name="color"><br>

        <button name="submit"> Add </button>
    </form>
</body>

</html>