<?php
     require('functions.php');
     session_start();
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"library");
     $author = "";
     $query = "select distinct author_name from books";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Authors</title>
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


    <h2 class="h2-register-header">Registered Authors</h2>
    <table>
        <thead>
          <tr>
             <th>Authors</th>
          </tr>
        </thead>
        <?php
             $query_run = mysqli_query($connection,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
                $author = $row['author_name'];
                ?>
        <tr>
            <td><?php echo $author;?></td>
        </tr>
        <?php
             }
            ?>
    </table>
</body>
</html>