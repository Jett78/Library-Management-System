<?php
if(isset($_POST['update']))
{
    $bname = $_POST['bname'];
    $bnum = $_POST['bnum'];
    $edition = $_POST['edition'];
    $author = $_POST['author'];

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "update books set book_name='$bname',book_num='$bnum',book_edition=$edition,author_name='$author' where book_num ='$_GET[bn]'";
    $query_run = mysqli_query($connection,$query);
}
?>
<script type="text/javascript">
   alert("updated successfully");
   window.location.href = "managebooks.php";
   </script>