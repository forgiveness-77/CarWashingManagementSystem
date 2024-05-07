<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Location</title>
</head>

<body>
    <h2>Update Location</h2>
    <form action="userUpdate.php?id=<?php echo $_GET['id']; ?>" method="post"><br><br>
        First_name: <input type="text" name="first_name" placeholder="your first name"><br><br>
        Last_name: <input type="text" name="last_naem" placeholder="your last name"><br><br>
        User Email: <input type="email" name="email" placeholder="your email"><br><br>
        user Phone_number: <input type="text" name="phone_number" placeholder="Your new phone_number"><br><br>
        <div>
            <button type="submit">Update Use</button>
        </div>
    </form>
</body>

</html>