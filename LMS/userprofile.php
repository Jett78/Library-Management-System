<?php
     require('admin/functions.php');
     session_start();
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"library");
     $bname ="";
     $author ="";
     $bnum ="";
     $date="";
     $query = "select book_name,book_num,book_author,issue_date from issued where student_id =$_SESSION[ID]";
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
         <h1>Library Management System</h1>
         <div class="profile-logout">
            <h3 class="view-profile" style="margin: 20px;font-family: arial;"><a href="viewbooks.php">Books</a></h3>
            <h3 class="view-profile" style="margin: 20px;font-family: arial;"><a href="viewprofile.php">Profile</a></h3>
            <li class="logout-btn"><a href="logout.php">Logout</a></li>
         </div>
        </div>
 </div>

 <span class="welcome-user">Welcome:<?php echo $_SESSION['Email'] ?></span>
 <h2 style="margin-top: 60px;font-family: Calibri;margin-right:22em;">Issued Books : <?php echo get_userissue_count();?></h2>
 <table>
        <thead>
          <tr>
             <th>Book Name</th>
             <th>Book Num</th>
             <th>Author</th>
             <th>Issue Date</th>
          </tr>
        </thead>
        <?php
             $query_run = mysqli_query($connection,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
                $bname = $row['book_name'];
                $bnum = $row['book_num'];
                $author = $row['book_author'];
                $date = $row['issue_date'];
                ?>
        <tr>
            <td><?php echo $bname;?></td>
            <td><?php echo $bnum;?></td>
            <td><?php echo $author;?></td>
            <td><?php echo $date;?></td>
        </tr>
        <?php
             }
            ?>
    </table>
</body>
</html>