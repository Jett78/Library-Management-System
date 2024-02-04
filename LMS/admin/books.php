<?php
    if(isset($_POST['bname']) && isset($_POST['bedition']) && isset($_POST['bnum'])  && isset($_POST['author_name']) && isset($_POST['category']))
    {
    $bname = $_POST["bname"];
    $bedition = $_POST["bedition"];
    $bnum = $_POST["bnum"];
    $author = $_POST["author_name"];
    $category = $_POST["category"];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select * from books where book_num='$bnum'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $row['book_num'] == $bnum;
    }
        if($row['book_num'] == $bnum)
        {
        ?><script type="text/javascript">
        alert("Book number Already Exixts")
        window.location.href = "books.php"
        </script>
    <?php
        }
    else{ 
        $insertquery = "insert into books values (null,'$bname','$bnum','$bedition','$author','$category')";
        $insertquery_run = mysqli_query($connection,$insertquery);
        ?>
        <script type="text/javascript">
        alert("Book Added Successfully")
        window.location.href = "books.php"
         </script>       
        <?php
    }
}

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
                  <a href="#">Add new Book</a>
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


     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="addbooksdetails"  method="post" style="display:grid;justify-content: center;">
        <h2 style="font-family: verdana;margin-bottom:20px;margin-top:30px;font-size: 30px;">Add Books</h2>
        <h3>Book Name</h3>
        <input type="text" name="bname" required>
        <h3>Book Number</h3>
        <input type="text" name="bnum" required>
        <h3>Book Edition</h3>
        <input type="text" name="bedition"required>
        <h3>Author Name</h3>
        <input type="text" name="author_name" required>
        <h3>Category</h3>
        <input type="text" name="category" required>
        <button type="submit" class="update-btn">Add</button>
        
    </form>
</body>
</html>