<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Location</title>
</head>

<body>
    <h2>Update user details</h2>
    <form action="userUpdate.php?id=<?php echo $_GET['id']; ?>" method="post">
        FirstName: <input type="text" name="fname" required><br>
        LastName: <input type="text" name="lname" required><br>
        Email: <input type="email" name="email" required><br>
        username: <input type="text" name="username" required><br>
        password: <input type="password" name="password" required><br>
        <input type="submit" value="Update User">
    </form>
</body>

</html>