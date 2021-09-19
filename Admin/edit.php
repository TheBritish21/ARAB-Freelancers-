<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

    $getUser = "SELECT * FROM tbl_users WHERE user_id='$id'";
    $result = mysqli_query($connection,$getUser);
    $row = mysqli_fetch_array($result);


    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $email =$_POST['email_address'];
        $username =$_POST['username'];
        $password =$_POST['user_pass'];
        $role =$_POST['roles'];

        $updated = "UPDATE tbl_users
                    SET name='$name', email_address='$email', username='$username'
                    , user_pass='$password', roles = '$role'
                    WHERE user_id = '$id'; ";

        mysqli_query($connection,$updated);
        getMessage('Updated Successfuly');
        

    }


    }



?>



<form action="" method="post">
                                
        <div class="form-group">
            <label for="name" >Name</label>
            <input type="text" name="name" class="form-control" autocomplete="off" value="<?= $row['name']?>" >
        
            
        </div>


        <div class="form-group">
            <label for="email" >Email address</label>
            <input type="email" name="email_address" class="form-control" id="email" 
            value="<?= $row['email_address']?>" autocomplete="off">
            <!---
            <small id="emailHelp" class="form-text text-muted"></small>-->
        </div>
        <span id="emailMsg"></span>

        <div class="form-group">
            <label for="username" >User Name</label>
            <input type="text" name="username" 
            value="<?= $row['username']?>" class="form-control" autocomplete="off">
        
            
        </div>


        <div class="form-group">
            <label for="password">Password</label>
            <input name="user_pass" type="password" 
            value="<?= $row['user_pass']?>" class="form-control" id="password" >
        </div>


        <div class="form-group check-password">
            <span id="error"></span>
        </div>

        <div class="form-group">
            <label>User Role</label>
            <select class="form-control" name="roles">
                <?php   
                    
                       if($row['roles'] =='1'){
                           echo "<option class='defroles' value='1'>Admin</option>";

                       }else{
                            echo "<option class='defroles' value='2'>User</option>";
                       }
                    
                ?>
                
                    <!--<option>Super Admin</option>-->
                    <option value="1">Admin</option>
                    <option value="2">User</option>
            </select>
        </div>
        <!------
        <button type="button" onclick="checkPassword()" class="button" value="Log In"></button>
            -->
        
        <button type="submit"  name="submit" onclick="checkPassword()" class="btn btn-primary">Update</button>
                
</form>