<?php
require 'functions.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
  

    $delUser = "DELETE FROM tbl_users WHERE user_id='$id'";
    mysqli_query($connection,$delUser);
    header("location:dashboard.php?page=manage_user");

  
}