<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navigation-bar">
        <div class="nav-container">
         <h1><a href="index.php">Library Management System</a></h1>
         <li class="adminlogin"><a href="admin/adminindex.php">Admin Login</a></li>
        </div>
 </div>
      
      <div class="register-body">
        <div class="register-container">
            <div class="img-register">
                <img src="https://i.pinimg.com/236x/8e/a3/20/8ea320e20791e263acdee9914e1dab3b.jpg" alt="">
            </div>
            <div class="registration">
                <form action="registration.php" method="post">
                    <h2>Registration</h2>
                    <input type="text" placeholder="Full name" name="fname" required></br>
                    <input type="text" placeholder="Email address" name="email" required></br>               
                    <input type="text" placeholder="Username" name="username" required></br>             
                    <input type="password" placeholder="Password" name="password" required></br>             
                    <input type="text" placeholder="Cell number" name="cell" required></br>
                    <input type="text" placeholder="Address" name="address" required></br>
                    <input type="submit">
                </form>
            </div>
        </div>
      </div>
</body>
</html>