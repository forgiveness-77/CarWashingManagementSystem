<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update.php?id=<?php echo $_GET['id']; ?>" method=" post">

        User ID: <input type="text" name="booking_id"><br>
        Booking Date: <input type="date" name="booking_date"><br>
        Status: <input type="text" name="status"><br>
        User Plan: <input type="text" name="user_plan"><br>
        <button type="submit" name="update">Update Booking</button>
    </form>

</body>


</html>