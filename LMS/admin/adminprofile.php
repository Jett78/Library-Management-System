<?php
    require('functions.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="navigation-bar">
        <div class="nav-container">
         <h1><a href="adminprofile.php">Library Management System</a></h1>
         <div class="profile-logout">
            <h3 class="view-profile" style="margin: 20px;font-family: arial;"><a href="adminviewprofile.php">View Profile</a></h3>
            <li class="logout-btn"><a href="../logout.php">Logout</a></li>
         </div>
        </div>
    </div>



    <div class="second-nav-bar">
        <div class="container">
            <h3 style="display: inline-block;font-size: 25px;color: rgb(254, 254, 254);margin: 15px;">Dashboard</h3>
            <div class="dropdown">
                <button class="dropbtn">Books</button>
                <div class="dropdown-content">
                  <a href="books.php">Add new Book</a>
                  <a href="managebooks.php">Manage Book</a>
                </div>
        </div>
    </div>

    <div class="second-nav-bar">
        <div class="container">
            <div class="dropdown">
                <button class="dropbtn">Issue Books</button>
                <div class="dropdown-content">
                    <a href="issue.php">Issue Book</a>
                  </div>
            </div>
        </div>
    </div>
  </div>
 </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Registered Users</h5><hr>
    <p class="card-text">No.of Total Users :<?php echo get_user_count();?></p>
    <a href="registeruser.php" class="btn-primary">View Users</a>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Registered Books</h5><hr>
    <p class="card-text">No.of Total Books :<?php echo get_book_count();?></p>
    <a href="registerbooks.php" class="btn-primary" style="background-color: rgb(134, 39, 207);">View Books</a>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Registered Categories</h5><hr>
    <p class="card-text">No.of Total Categories :<?php echo get_category_count();?></p>
    <a href="registercategory.php" class="btn-primary" style="background-color: rgb(39, 207, 42);">View Categories</a>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Registered Authors</h5><hr>
    <p class="card-text">No.of Total Authors :<?php echo get_author_count();?></p>
    <a href="registerauthors.php" class="btn-primary" style="background-color: rgb(235, 46, 46);">View Authors</a>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Issued Books</h5><hr>
    <p class="card-text">No.of Issued Books :<?php echo get_issue_count();?></p>
    <a href="registerissue.php" class="btn-primary" style="background-color: rgb(50, 46, 156);">View Issues</a>
  </div>
</div>


</body>
</html>