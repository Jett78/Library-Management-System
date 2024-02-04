<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $bname = "";
    $bnum= "";
    $edition = "";
    $author = "";
    $query = "select * from books where book_num='$_GET[bn]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $bname = $row['book_name'];
        $bnum = $row['book_num'];
        $edition = $row['book_edition'];
        $author = $row['author_name'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="navigation-bar">
        <div class="nav-container">
         <h1><a href="adminprofile.php">Library Management System</a></h1>
         <div class="profile-logout">
            <h3 class="view-profile" style="margin: 20px;font-family: arial;"><a href="viewprofile.php">View Profile</a></h3>
            <li class="logout-btn"><a href="logout.php">Logout</a></li>
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

    <form action="editupdatebooks.php" class="editbooksdetails" style="display: grid;justify-content: center;margin-top:35px;color:  rgb(98, 98, 106);">
    <h2 class="h2-header">Edit Details</h2>
        <h3>Book Name</h3>
        <input type="text" name="bname" value="<?php echo $bname; ?>">
        <h3>Book Number</h3>
        <input type="text" name="bnum"  value="<?php echo $bnum; ?>">
        <h3>Edition</h3>
        <input type="number" name="edition"  value="<?php echo $edition; ?>">
        <h3>Author</h3>
        <input type="text" name="author"  value="<?php echo $author; ?>">
       <button type="submit" class="update-btn" name="update">Update</button>
    </form>
</body>
</html>