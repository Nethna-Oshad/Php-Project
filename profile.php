<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
    <style>
        body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    .container {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 100vh;
    }
    .sidebar {
        text-align: center;
        height: 600px;
        margin-left: 10px;
        border-radius: 30px;
        background: lightblue;
        width: 300px;

    }
 
    .profile-image {
        border-radius: 50%;
        margin-bottom: 20px;
        
    }
    .profile-btn {
        margin-top: 10px;
        padding: 8px 16px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 10px;
        cursor: pointer;
        width: 170px
        
    }
    .profile-btn-logout {
        margin-top: 150px;
        padding: 8px 16px;
        border: none;
        background-color: red;
        color: #fff;
        border-radius: 4px;
        cursor: pointer;
        width: 100px
        
    }
    </style>
  
  
</head>
<body>
     <?php
                session_start();
                // Database connection
                include 'connect.php'; 

                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                    $sql = "SELECT * FROM user WHERE Email = '$email'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) == true) {
                        $row = mysqli_fetch_assoc($result);

                        
                        $name = $row['name'];
                        
                        

                        
                        echo "<h1>WELCOME BACK : $name</h1>";
                       
                       

                        
                        
                    } else {
                        echo "User not found.";
                    }
                } else {
                    header("Location: login.php");
                    exit();
                }

                mysqli_close($conn);
                ?>
    <div class="container">
        <div class="sidebar">
            <h2>My profile</h2>
            <img src="images\User-Icon.jpg" alt="user-image" srcset="" class="profile-image" width="120px" height="120px"><br>
            <a href="profile.php"><button type="button" class="profile-btn">User Details</button></a><br>
            <a href="view_history.html"><button type="button" class="profile-btn">View History</button></a><br>
            <a href="privacy.html"><button type="button" class="profile-btn">Privacy</button></a><br>
            <a href="notifications.html"><button type="button" class="profile-btn">Notifications</button></a><br>
            <a href="help.html"><button type="button" class="profile-btn">Help</button></a><br>
            <a href="contact_us.html"><button type="button" class="profile-btn">Contact Us</button></a><br>

            <a href="logout.php"><button type="button" class="profile-btn-logout">LOG OUT</button></a>
           
            
        </div>
        
        <div class="user-details">
            <h2 class="user-details-text">USER DETAILS</h2>
            <div class="user-info">
                <?php
                
                // Database connection
                include 'connect.php'; 

                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                    $sql = "SELECT * FROM user WHERE Email = '$email'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) == true) {
                        $row = mysqli_fetch_assoc($result);

                        $id = $row['id'];
                        $name = $row['name'];
                        $age = $row['age'];
                        $address = $row['address'];
                        $phone = $row['phone'];
                        $email = $row['email'];
                        $bio = $row['bio'];
                        

                        echo "<p>Id:  $id</p>";
                        echo "<p>Name: $name</p>";
                        echo "<p>Age: $age</p>";
                        echo "<p>Address: $address</p>";
                        echo "<p>Phone: $phone</p>";
                        echo "<p>Email: $email</p>";
                        echo "<p>Bio: $bio</p>";
                       

                        
                        
                    } else {
                        echo "User not found.";
                    }
                } else {
                    header("Location: login.php");
                    exit();
                }

                mysqli_close($conn);
                ?>
            </div>
            <div class="profile-actions">
                <a href="edit-profile-form.php" class="edit-profile-btn">Edit Profile Data</a>
                <a href="delete_profile.php" class="delete-profile-btn">Delete Profile Data</a>
            </div>
        </div>
        <div class="sidebar-placeholder"></div>
    </div>
</body>
</html>
