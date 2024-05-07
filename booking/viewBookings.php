<?php

include 'connection.php';
// Select all locations from Location table
$query = "SELECT * FROM bookings";
$result = mysqli_query($conn, $query);

//handle if delete button is clicked
if(isset($_POST['delete_id'])){
    $id  = $_POST['delete_id'];
   deleteUser($id);
}


// Check if there are any records



function deleteUser($id){
    global $conn;
    $sql = "DELETE FROM bookings WHERE booking_id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "book Deleted successfully";
        header('Location:readBooks.php');
    }else{
        echo "Failed to delete the record";
    }
}
mysqli_close($conn);
?>
<script>
function redirectToUpdatePage(id) {
    // Redirect to updating page with the location ID
    var form = document.getElementById('updateForm' + id);
    form.action = 'realUpdate.php?id=' + id;
    form.submit();
}
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1.0">
    <title>Bookings</title>
</head>
<body>
    <?php
   $product = array(); 
    while($row = mysqli_fetch_assoc($result)){
        $product[] = $row;

    }

    ?>

    <table>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $length = count($product);
                for($i = 0; i<length; i++){
                    echo $product[''];
                }
                ?>
            </tr>
        </tbody>
    </table>

</body>
</html>