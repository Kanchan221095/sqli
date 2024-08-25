<?php
include 'connection.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Username: " . $row["username"]. " - Password: " . $row["password"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Select</title>
    <style>
        /* Add your CSS here */
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
        }
        .container {
            margin: 50px;
            padding: 20px;
            background-color: blue;
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
        <h2>SELECT Page</h2>
        <form method="POST">
            
            <input type="text" name="username" placeholder="Enter Username">
            <input type="submit" value="Search">
            
        </form>
    </div>
    </center>
</body>
</html>
