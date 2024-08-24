<?php
include 'connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "UPDATE users SET password = '$password' WHERE username = '$username'";
    if ($conn->query($query) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Update</title>
    <style>
        /* Add your CSS here */
        body {
            font-family: Arial, sans-serif;
            background-color:  #f9f79d ;
        }
        .container {
            margin: 50px;
            padding: 20px;
            background-color: yellow;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type=text], input[type=password], input[type=submit] {
            margin: 5px 0;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <center>
    <div class="container">
        <h2>UPDATE Page</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter New Password">
            <input type="submit" value="Update">
        </form>
    </div>
    </center>
</body>
</html>
