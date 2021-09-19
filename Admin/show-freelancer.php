<?php
require 'config.php';
    if(isset($_GET['ID'])){
        $fid = $_GET['ID'];

        $sql = "SELECT * FROM tbl_freelancers WHERE f_id='$fid'" ;
        $query = mysqli_query($connection,$sql);

        $row = mysqli_fetch_array($query);

    }?>

    <table class="table table_bordered">
    <thead>
        <tr>
            <th>name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $row['f_name']?></td>
            <td><?= $row['f_phone']?></td>
            <td><?= $row['f_email']?></td>
            <td>
                <img width="50" height="50" src="uploaded/<?= $row['photo']?>" >
            </td>

        </tr>

    </tbody>


