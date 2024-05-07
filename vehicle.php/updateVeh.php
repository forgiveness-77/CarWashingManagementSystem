<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Vehicle</title>
</head>

<body>
    <h2>Update Veh</h2>
    <form action="vehupdate.php?id=<?php echo $_GET['id']; ?>" method="post"><br><br>
        User_id: <input type="number" name="user_id" placeholder="userId"><br><br>
        type: <input type="radio" name="type" value="Two Wheeler"> Two Wheeler <br><br>
        <input type="radio" name="type" value="Four Wheeler"> Four Wheeler <br><br>
        brand: <input type="text" name="brand" placeholder="your car brand"><br><br>
        color: <input type="text" name="color" placeholder="your car color"><br><br>
        <div>
            <button type="submit">Update Veh</button>
        </div>
    </form>
</body>

</html>