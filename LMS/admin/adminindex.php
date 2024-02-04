<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body style="background-image:url(https://t4.ftcdn.net/jpg/04/60/71/01/360_F_460710131_YkD6NsivdyYsHupNvO3Y8MPEwxTAhORh.jpg);">
    <div class="navigation-bar">
        <div class="nav-container">
         <h1><a href="../index.php">Library Management System</a></h1>
        </div>
 </div>

 <form action=""class="adminloginform" method="post" style="display:grid;justify-content: center;margin-top:50px;";>
    <h2 style="font-family: arial;font-size:30px;margin-bottom:40px;color: rgb(25, 254, 94);">Admin Login</h2>
    <h3>Username</h3>
    <input type="text" name="username">
    <h3>Password</h3>
    <input type="password" name="password">
    <button type="submit" class="admin-submit-btn" name="submit-btn">Login</button>
 </form>

 <?php
   session_start();
   if(isset($_POST['submit-btn']))
   {
    if(isset($_POST['username']) && isset($_POST['password']))
      {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select * from admin where Username = '$username'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        if($row['Username'] == $username)
        {
            if($row['Password'] == $password)
            {
               $_SESSION['Name'] = $row['Name'];
               header("location:adminprofile.php");
            }
            else{
               ?>
               <br><span class="mssg-2">Wrong Password!!</span>
               <?php
            }
        }
            else{
               echo "wrong username";
            }
    }
      }
   }
?>
</body>
</html>