<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Mangement System</title>
    <link rel="stylesheet" href="style.css">
</head>
<html>
    <body>
    <div class="navigation-bar">
           <div class="nav-container">
            <h1><a href="index.php">Library Management System</a></h1>
            <li class="adminlogin"><a href="admin/adminindex.php">Admin Login</a></li>
           </div>
    </div>

     
    <div class="body-section">
        <div class="body-container">
            <div class="login-section">
                <div class="login-container">

                    <form action="" method="post">
               <h2 class="login-head">Login</h2>
            <h3>Useraname</h3>
            <input type="text" name="username" required>
            <h3>Password</h3>
            <input type="password" name="password" required>
            <input type="submit" name="submit-btn">
            <p>Dont have an account yet?<a href="register.php" id="register-word">register</a></p>
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
    $query = "select * from users where Username = '$username'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        if($row['Username'] == $username)
        {
            if($row['Password'] == $password)
            {
               $_SESSION['Username'] = $row['Username'];
               $_SESSION['ID'] = $row['ID'];
               $_SESSION['Email'] = $row['Email'];
               header("location:userprofile.php");
            }
            else{
               ?>
               <br><span class="mssg">Wrong Password</span>
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

                </div>
            </div>
            <div class="img-section">
                 <img src="https://st4.depositphotos.com/8741420/26578/v/450/depositphotos_265783004-stock-illustration-three-bookshelves-with-favorite-books.jpg" alt="">
            </div>
        </div>
    </div>

  

   
</body>
</html>