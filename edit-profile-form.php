<?php
session_start();
// Database connection
include 'connect.php'; 

if (isset($_SESSION['email'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $Email = $_POST['email'];
        $bio = $_POST['bio'];
        $password = $_POST['password'];
    
        // Update user's profile data
        $sql = "UPDATE user SET name='$name',age='$age', address='$address',phone='$phone',Email='$Email',bio='$bio',password='$password' WHERE Email='$Email'";
        if (mysqli_query($conn, $sql)) {
            // Profile data updated successfully
            echo '<script>alert("Profile data updated successfully.");</script>';
            // Redirect to profile.php
            header("Location: profile.php");
            exit();
        } else {
            echo "Error updating profile data: " . mysqli_error($conn);
        }
    }
} else {
    header("Location: login.php");
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file if needed -->
</head>
<body>
    <h2>Edit Profile</h2>
    <link rel="stylesheet" href="form.css">
    <?php
    
    // Database connection
    include 'connect.php'; 

    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM user WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == true) {
            $row = mysqli_fetch_assoc($result);

            $name = $row['name'];
            $age = $row['age'];
            $address = $row['address'];
            $phone = $row['phone'];
            $email = $row['email'];
            $bio = $row['bio'];
            $password = $row['password'];

            // Output the edit profile form with pre-filled fields
            echo "<form action='edit-profile-form.php' method='POST'>";
            echo "<label >Name:</label>";
            echo "<input type='text' name='name' value='$name' required><br><br>";
            echo "<label >Age:</label>";
            echo "<input type='text' id='first_name' name='age' value='$age' required><br><br>";
            echo "<label >Address:</label>";
            echo "<input type='text' id='first_name' name='address' value='$address' required><br><br>";
            echo "<label >Phone:</label>";
            echo "<input type='text' id='first_name' name='phone' value='$phone' required><br><br>";
            echo "<label >Email:</label>";
            echo "<input type='text' id='last_name' name='email' value='$email' required><br><br>";
            echo "<label >Bio:</label>";
            echo "<input type='text' id='last_name' name='bio' value='$bio' required><br><br>";
            echo "<label >Password:</label>";
            echo "<input type='password' id='last_name' name='password' value='$password' required><br><br>";
            echo "<input type='submit' value='Submit'>";
            echo "</form>";
        } else {
            echo "User not found.";
        }
    } else {
        header("Location: login.php");
        exit();
    }

    mysqli_close($conn);
    ?>
</body>
</html>
