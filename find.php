<?php
require 'Admin/config.php';
if(isset($_GET['K'])){
    $text = '%' . $_GET['K'] . '%';

    $sql = "

        SELECT tbl_freelancers.f_id,tbl_freelancers.f_name,tbl_freelancers.photo
        FROM tbl_freelancers INNER JOIN details
        ON tbl_freelancers.f_id = details.f_id
        AND details.description LIKE '$text'

    ";

    $result = mysqli_query($connection,$sql);
    
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){

        ?>   
                <tr>
                    <td>
                        <a href="profile.php?frID=<?= $row['f_id']?>">
                            <?php
                            if($row['photo'] != Null) { ?>
                            <img src="Admin/uploaded/<?= $row['photo']?>" width="60" height="60">

                            <?php }else{ ?>

                                    <img src="Images/person.svg" width="60" height="60">
                            <?php }
                            ?>

                        <?= $row['f_name']?>
                        </a>
                    </td>
                </tr>

        <?php
            }

    }else{
        echo 'No data found.';
    }
    
}