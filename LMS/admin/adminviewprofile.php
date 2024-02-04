<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $name = "";
    $email = "";
    $cell = "";
    $address = "";
    $query = "select * from admin where Name ='$_SESSION[Name]'";
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
    <title>Admin view Profile</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="navigation-bar">
        <div class="nav-container">
         <h1><a href="adminprofile.php">Library Management System</a></h1>
         <div class="profile-logout">
            <h3 class="view-profile" style="margin: 20px;font-family: arial;"><a href="adminviewprofile.html">View Profile</a></h3>
            <li class="logout-btn"><a href="../logout.php">Logout</a></li>
         </div>
        </div>
    </div>

    <form action="" style="display:grid;justify-content: center;margin-top:35px;color: rgb(98, 98, 106);">
        <h2 style="font-family: verdana;margin-bottom:50px;font-size: 30px;">Profile Details</h2>
         <h3>Name</h3>
         <input type="text" value="<?php echo $name; ?>" style="border-bottom: 3px solid black;opacity: 0.6;margin: 25px;" disabled>
         <h3>Email</h3>
         <input type="text"  value="<?php echo $email; ?>" style="border-bottom: 3px solid black;opacity: 0.6;margin: 25px;" disabled>
         <h3>Cell </h3>
         <input type="text"  value="<?php echo $cell; ?>" style="border-bottom: 3px solid black;opacity: 0.6;margin: 25px;" disabled>
         <h3>Address</h3>
         <input type="text"  value="<?php echo $address; ?>" style="border-bottom: 3px solid black;opacity: 0.6;margin: 25px;" disabled>
     </form>
</body>
</html>