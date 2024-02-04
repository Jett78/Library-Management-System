<?php
   session_start();
   if(isset($_POST['current_pwd']) && isset($_POST['new_pwd'])) 
   {
   $password = "";
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"library");
   $query = "select Password from users where Username='$_SESSION[Username]'";
   $query_run = mysqli_query($connection,$query);
   while($row = mysqli_fetch_assoc($query_run))
   {
    $password = $row['Password'];
   }
   if($password == $_POST['current_pwd'])
   {
    $updatequery = "update users set Password='$_POST[new_pwd]' where Username='$_SESSION[Username]'";
    $query_run2 = mysqli_query($connection,$updatequery);
    ?>
    <script type="text/javascript">
    alert("Password Changed Successfully")
    window.location.href = "index.php"
    </script><?php
   }
   else{
      ?>
      <script type="text/javascript">
      alert("Wrong Password")
       window.location.href = "changepassword.php"
      </script>
    <?php
   }
}
?>
