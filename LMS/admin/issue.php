<?php
    if(isset($_POST['add-btn']))
    {
    $studentID = $_POST["studentID"];   
    $bname = $_POST["bname"];
    $bnum = $_POST["bnum"];
    $author = $_POST["author"];
    $issuedate = $_POST["issue_date"];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query ="insert into issued values ('$studentID','$bname','$bnum','$author','$issuedate')";
    $query_run = mysqli_query($connection,$query);
    ?><script type="text/javascript">
    alert("Book Issued Successfully")
    window.location.href = "issue.php"
     </script>     
     <?php
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
                    <a href="#">Issue Book</a>
                  </div>
            </div>
        </div>
    </div>
  </div>
 </div>
</div>

     <form action="" class="addbooksdetails" method="post" style="display:grid;justify-content: center;">
        <h2 style="font-family: verdana;margin-bottom:20px;margin-top:30px;font-size: 30px;">Issue Book</h2>
        <h3>Student ID</h3>
        <input type="text"  name="studentID"  required>
        <h3>Book Name</h3>
        <input type="text"  name="bname" required>
        <h3>Book Number</h3>
        <input type="text"name="bnum" required>
        <h3>Book Author</h3>
        <input type="text"  name="author" required>
        <h3>Issue Date</h3>
        <input type="text"  name="issue_date" value="<?php echo date("y-m-d");?>"required>
        <button type="submit" class="update-btn" name="add-btn">Add</button>
        
    </form>
    
          
</body>
</html>