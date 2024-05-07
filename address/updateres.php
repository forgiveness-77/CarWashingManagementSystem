<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Location</title>
</head>

<body>
    <h2>Update Location</h2>
    <form action="update.php?id=<?php echo $_GET['id']; ?>" method="post">
        Name: <input type="text" name="name" required><br>
        Address: <input type="text" name="address" required><br>
        Working Hours Start: <input type="time" name="working_hours_start" required><br>
        Working Hours End: <input type="time" name="working_hours_end" required><br>
        <input type="submit" value="Update Location">
    </form>
</body>

</html>