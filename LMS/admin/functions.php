<?php
   function get_user_count()
   {
    $user_count = "";
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select count(*) as user_count from users";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $user_count = $row['user_count'];
    }
    return($user_count);
   }


   function get_category_count()
   {
    $cat_count = "";
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select count(distinct category) as cat_count from books";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $cat_count = $row['cat_count'];
    }
    return($cat_count);
   }


   function get_book_count()
   {
    $book_count = "";
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select count(*) as book_count from books";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $book_count = $row['book_count'];
    }
    return($book_count);
   }


   function get_author_count()
   {
    $author_count = "";
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select count(distinct author_name) as author_count from books";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $author_count = $row['author_count'];
    }
    return($author_count);
   }


   function get_issue_count()
   {
    $issue_count = "";
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select count(*) as issue_count from issued";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $issue_count = $row['issue_count'];
    }
    return($issue_count);
   }

   function get_userissue_count()
   {
    $userissue_count = "";
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select count(*) as userissue_count from issued where student_id =$_SESSION[ID] ";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $userissue_count = $row['userissue_count'];
    }
    return($userissue_count);
   }

?>