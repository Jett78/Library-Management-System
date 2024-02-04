<?php
     require('admin/functions.php');
     session_start();
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"library");
     $bname="";
     $bedition="";
     $author="";
     $query = "select distinct book_name,book_edition,author_name from books";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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

 <span class="welcome-user">Welcome:<?php echo $_SESSION['Email'] ?></span>
 <h2 style="margin-top: 60px;font-family: Calibri;margin-right:22em;">Available Books : <?php echo get_book_count();?></h2>
 <table>
        <thead>
          <tr>
             <th>Book Name</th>
             <th>Edition</th>
             <th>Author</th>
          </tr>
        </thead>
        <?php
             $query_run = mysqli_query($connection,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
                $bname = $row['book_name'];
                $bedition = $row['book_edition'];
                $author = $row['author_name'];
                ?>
        <tr>
            <td><?php echo $bname;?></td>
            <td><?php echo $bedition;?></td>
            <td><?php echo $author;?></td>
        </tr>
        <?php
             }
            ?>
    </table>
</body>
</html>