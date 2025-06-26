<?php 
// Adding database connection
include 'connect.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather user input from the form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email= $_POST['email'];
    $bio = $_POST['bio'];
    $password = $_POST['password'];
   
    // SQL to insert user data into the database
    $sql = "INSERT INTO user (name, age, address, phone, email, bio, password) 
            VALUES ('$name', '$age', '$address', '$phone', '$email', '$bio', '$password')";

    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration successful');</script>";
        echo "<script>alert('Please enter User credentials to login here ');</script>";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>";
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
  <title>User Registration Form</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <h2>User Registration</h2>
  <form action="user.php" method="post" id="registrationForm">
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label for="age">Age:</label>
      <input type="text" id="age" name="age" required>
    </div>
    <div>
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>
    </div>
    <div>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="bio">Bio:</label>
      <textarea id="bio" name="bio" rows="4" cols="50" required></textarea>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" minlength="6" required>
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>
  </form>
</body>
</html>
