<?php
    if(isset($_POST['categoryfield'])){
    $category = $_POST["categoryfield"];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select * from category";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        if($row['cat_name'] != $category)
        {
            $query2 = "insert into category(`cat_id`, `cat_name`) values (null,'$category')";
            $query_run2 = mysqli_query($connection,$query2);
            ?>
            <script type="text/javascript">
            alert("Category Added Successfully")
            window.location.href = "category.php"
             </script>       
    <?php
    }
    else{
        ?>
        <script type="text/javascript">
        alert("Category Already Exixts")
        window.location.href = "category.php"
        </script>
        <?php
    }
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
            <h3 class="view-profile" style="margin: 20px;font-family: arial;"><a href="adminviewprofile.html">View Profile</a></h3>
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
                  <a href="#">Add new Book</a>
                  <a href="#">Manage Book</a>
                </div>
        </div>
    </div>

    <div class="second-nav-bar">
        <div class="container">
            <div class="dropdown">
                <button class="dropbtn">Category</button>
                <div class="dropdown-content">
                  <a href="category.php">Add new Category</a>
                  <a href="#">Manage Category</a>
                </div>
        </div>
    </div>

    <div class="second-nav-bar">
        <div class="container">
            <div class="dropdown">
                <button class="dropbtn">Author</button>
                <div class="dropdown-content">
                  <a href="author.php">Add new Author</a>
                  <a href="#">Manage Authors</a>
                </div>
        </div>
    </div>

    <div class="second-nav-bar">
        <div class="container">
            <div class="dropdown">
                <button class="dropbtn">Issue Books</button>
                <div class="dropdown-content">
                    <a href="#">Issue Book</a>
                  </div>
            </div>
        </div>
    </div>
  </div>
 </div>
</div>

     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="display:grid;justify-content: center;">
        <h2 style="font-family: verdana;margin-bottom:20px;margin-top:30px;font-size: 30px;">Add Category</h2>
        <input type="text" name="categoryfield"style="border: 3px solid blue;margin:25px;" required>
        <button type="submit" class="update-btn">Add</button>
        
    </form>
</body>
</html>