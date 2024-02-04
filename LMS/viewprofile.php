<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $name = "";
    $email = "";
    $cell = "";
    $address = "";
    $query = "select * from users where Username ='$_SESSION[Username]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $name = $row['Name'];
        $email = $row['Email'];
        $cell = $row['Cell'];
        $address = $row['Address'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
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

    <form action="editprofile.php" class="profiledetails"  method="post" style="display:grid;justify-content: center;margin-top:35px;color: rgb(98, 98, 106);">
       <h2 class="h2-header">Profile Details</h2>
        <h3>Full Name</h3>
        <input type="text" value="<?php echo $name; ?>"disabled>
        <h3>Email</h3>
        <input type="text"  value="<?php echo $email; ?>"disabled>
        <h3>Cell </h3>
        <input type="text"  value="<?php echo $cell; ?>"disabled>
        <h3>Address</h3>
        <input type="text"  value="<?php echo $address; ?>"disabled>
        <a href="changepassword.php" style="color: red;font-family: arial;font-weight: 700;margin-top:30px;" >Change password?</a>
        <button type="submit" class="edit-btn">Edit</button>
    </form>
</body>
</html>