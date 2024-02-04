<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navigation-bar">
        <div class="nav-container">
         <h1><a href="userprofile.php">Library Management System</a></h1>
         <div class="profile-logout">
            <h3 class="view-profile" style="margin: 20px;font-family: arial;"><a href="viewbooks.php">Books</a></h3>
            <h3 class="view-profile" style="margin: 20px;font-family: arial;"><a href="viewprofile.php">Profile</a></h3>
            <li class="logout-btn"><a href="logout.php">Logout</a></li>
         </div>
        </div>
    </div>

    <form action="passwordchange.php"  method="post" style="display:grid;justify-content: center;margin-top:50px;color: rgb(98, 98, 106);">
        <h2 class="h2-header">Change Password</h2>
        <input type="text" placeholder="Currrent Password" name="current_pwd"  style="height:60px;margin:20px;background-color: rgb(183, 219, 248);">
        <input type="text" placeholder="New Password" name="new_pwd" style="height:60px;margin:20px;background-color: rgb(183, 219, 248);">
        <button type="submit" class="update-btn">Update</button>
    </form>

</body>
</html>