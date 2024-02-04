<?php
session_start();
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['cell']) && isset($_POST['address']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $address = $_POST['address'];

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "update users set Name='$name',Email='$email',Cell='$cell',Address='$address' where Username='$_SESSION[Username]'";
    $query_run = mysqli_query($connection,$query);
}else{
    echo"run";
}
?>
<script type="text/javascript">
   alert("updated successfully")
   window.location.href = "userprofile.php"
   </script>