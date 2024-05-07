<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
</head>

<body>
    <h2>Booking Form</h2>
    <form action="handleBook.php" method="post">
        Booking Date: <input type="date" name="booking_date"><br>
        Status: <input type="text" name="status"><br>
        User Plan: <input type="text" name="user_plan"><br>
        <button type="submit" name="submit">Submit Booking</button>
    </form>
</body>

</html>