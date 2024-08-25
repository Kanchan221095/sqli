<?php
include 'connection.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $query = "DELETE FROM users WHERE username = '$username'";
    if ($conn->query($query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Delete</title>
    <style>
        /* Add your CSS here */
        body {
            font-family: Arial, sans-serif;
            background-color:  #f98b73
            ;
        }
        .container {
            margin: 50px;
            padding: 20px;
            background-color: red;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type=text], input[type=submit] {
            margin: 5px 0;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <center>
    <div class="container">
        <h2>DELETE Page</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Enter Username to Delete">
            <input type="submit" value="Delete">
        </form>
    </div>
    </center>
</body>
</html>
