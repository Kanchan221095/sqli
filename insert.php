<?php
include 'connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Insert</title>
    <style>
        /* Add your CSS here */
        body {
            font-family: Arial, sans-serif;
            background-color:  #b5fba8 ;
        }
        .container {
            margin: 50px;
            padding: 20px;
            background-color: green;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type=text], input[type=password], input[type=submit] {
            margin: 5px 0;
            padding: 10px;
            font-size: 16px;
        }
        .result {
            color: #0000ff;
        }
    </style>
</head>
<body>
    
    <center>
    <div class="container">
        <h2>INSERT Page</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" value="Insert">
        </form>
    </div>
    </center>
</body>
</html>
