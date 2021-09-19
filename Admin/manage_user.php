<?php
  $sql = "SELECT * FROM tbl_users";
  $result = mysqli_query($connection,$sql);
  if(mysqli_num_rows($result) > 0){
?>


<div class="row">

    <div class="col-md-9">

        <!---start card-->
        <div class="card"></div>
                      
          <div class="card-body">
            <div class="search">
              <input type="text" id="find" class="form-control" placeholder="Search..."> 
              <div class="result"></div>
            </div>               
              <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>User Name</th>
                      <th>User Role</th>
                      <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      while($users = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?= $users['name']?></td>
                        <td><?= $users['email_address']?></td>
                        <td><?= $users['username']?></td>
                        <td>
                          <?php
                          if($users['roles'] == 1){
                            echo 'Admin';
                          }else{
                            echo 'User';
                          }
                          ?>
                        </td>
                        <td>
                        <a href="dashboard.php?page=edit&id=<?= $users['user_id'] ?>" title="Edit"><i class="far fa-edit"></i></a>
                          &nbsp;
                          <a href="delete.php?id=<?= $users['user_id'] ?>" title="Delete"><i class="fas fa-trash-alt"></i></a>
                        </td>

                    </tr>
                    <?php }
                    ?>
                </tbody>
              </table>
                          <!---end card-->
          </div>
            

    </div>
            
</div>
<?php
  }else{
    getMessage('There is no Users data.','red');
  }
  ?>
  