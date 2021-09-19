<?php
    require 'admin/config.php';
    if(isset($_GET['K'])){
        $text = '%' . $_GET['K'] . '%';

        $sql = "
        
        SELECT tbl_freelancer.f_id,tbl_freelancer.f_name,tbl_freelancer.photo
        FROM tbl_freelancer INNER JOIN details
        ON tbl_freelancer.f_id = details.f-id
        AND details.description LIKE '$text'

        ";

        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) > 0 {

            while($row = mysqli_fetch_array($result)){
            
    ?>
        <tr>
            <td>
            <?php
            <a href="profile.php?frId=<? =$row
            if($row['photo'] !=NULL) {?>
                <img src="admin/uploaded/<?= '$row['photo']?>" width="60" height="60">
            <?php }else{ ?>
            }
            }
            <?php
            </td>
        <td><?= $row['f-name']?></td>


            }
        });
    }