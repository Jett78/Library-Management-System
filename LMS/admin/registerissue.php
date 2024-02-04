<?php
     require('functions.php');
     session_start();
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"library");
     $bname ="";
     $author ="";
     $bnum ="";
     $student ="";
     $date="";
     $query = "select issued.book_name,issued.book_author,issued.book_num,issued.issue_date,users.Name from issued left join users on issued.student_id = users.ID ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
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


    <h2 class="h2-register-header">Issued Books</h2>
    <table>
        <thead>
          <tr>
             <th>Book Name</th>
             <th>Book Num</th>
             <th>Author</th>
             <th>Issue Date</th>
             <th>Student</th>
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
                $student = $row['Name'];
                ?>
        <tr>
            <td><?php echo $bname;?></td>
            <td><?php echo $bnum;?></td>
            <td><?php echo $author;?></td>
            <td><?php echo $date;?></td>
            <td><?php echo $student;?></td>
        </tr>
        <?php
             }
            ?>
    </table>
</body>
</html>