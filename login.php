<?php
session_start();

// Adding database connection
include 'connect.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather user input from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL to check if the user exists in the database
    $sql = "SELECT * FROM user WHERE Email = '$email' AND password = '$password'";

    // Execute SQL query
    $result = mysqli_query($conn, $sql);

    // Check if a row was returned
    if (mysqli_num_rows($result) == 1) {
        // Fetch user data
        $user = mysqli_fetch_assoc($result);
        
        // Redirect to profile.php upon successful login
        $_SESSION['email'] = $email;
        echo '<script>alert("You have logged in successfully.");</script>';
        header("Location: profile.php");
        exit();
    } else {
        // Invalid credentials, display an alert
        echo '<script>alert("Invalid email or password");</script>';
    }
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h2>Login</h2>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
