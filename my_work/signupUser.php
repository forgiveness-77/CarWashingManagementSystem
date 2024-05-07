<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,
     initial-scale=1.0" />
    <title>SIGNUP</title>
</head>

<body>
    <!-- Create a form for user signup -->
    <form action="signup.php" method="post">
        <div>
            <label for="firstName">FirstName</label>
            <input type="text" name="first_name" id="firstName" required>
            <label for="lastName">LastName</label>
            <input type="text" name="last_name" id="lastName" required>
        </div>
        <label for="email">Email: </label>
        <input id="email" type="email" name="email" required /><br />
        <label for="password">Password:</label>
        <input id="password" type="password" name="password" required /><br />
        <label for="phone_number"> Phone Number</label>
        <input id="phone_number" type="text" name="phone_number" required /><br />
        <input type="submit" value="Signup" />
    </form>
</body>

</html>