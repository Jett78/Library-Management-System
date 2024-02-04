<?php
if(isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cell']) && isset($_POST['address']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cell = $_POST['cell'];
        $address = $_POST['address'];

        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"library");
        $query = "insert into users values(null,'$fname','$email','$username',
        '$password','$cell','$address')";
        $query_run = mysqli_query($connection,$query);
    }
    else {
        echo "All fields are required!";
    }
?>
<script type="text/javascript">
    alert("Registration Successfull")
    window.location.href = "index.php"
    </script>