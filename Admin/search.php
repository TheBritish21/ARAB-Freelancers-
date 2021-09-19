<?php
    require 'config.php';
    if (isset($_GET['K'])) {
       $name = "%" . $_GET['K'] . "%";
       $sql = "SELECT * FROM tbl_users WHERE `name` LIKE '$name'";
        $query = mysqli_query($connection,$sql);

        if(mysqli_num_rows($query) > 0){
            while($data = mysqli_fetch_array($query)){

                echo "<a href='#'>" .$data['name']. "</a><br>"; 
    
            }

        }else { 
            echo 'No Data Found.';
        }

    }
