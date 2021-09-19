

<!--start navbar-->
    
    <!--end navbar-->

    <!--<div class="message">
        <i class="fas fa-check-circle"></i>
        Created Successfuly.
    </div>-->

<div class="container">
    <div class="row">

        <!---start Sidebar-->
       
        <!---end Sidebar-->

        
        <div class="col-md-9">
            <!---start alert
            <!----end alert-->


            <!---start card-->
            <div class="card"></div>
            <?php
                if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $email = $_POST['email_address'];
                    $username = $_POST['username'];
                    $password = $_POST['user_pass'];
                    $role = $_POST['roles'];
                    $errors = array();

                    if(empty($email)){
                        $errors[0] = 'Email Address Field is required.';
                    }

                    if(empty($password)){
                        $errors[1] = 'Password Field is required.';
                    }

                    //checkUser('$username',$email,tbl_users,'');

                    $sql = "SELECT username,email_address From tbl_users 
                    WHERE username='$username'
                    OR email_address='$email'";
                    $result = mysqli_query($connection,$sql);
                    
                    if(mysqli_num_rows($result) == 1){
                        getMessage('Username or email adress is already taken !','red');
                    }else{
                    //Insert into DB
                    $addUser = "INSERT Into tbl_users 
                                Values(null,'$name','$email','$username','$password','$role')";
                    mysqli_query($connection,$addUser);
            
                    getMessage('User Created Successfuly.','orange');
                    }

                }


            ?>
                
                
                
                    <div class="card-body">
                        <form action="" method="post">
                        <?php
                            if(!empty($errors)){
                        ?>
                        <div class="alert alert-danger"><!--div.alert.alert-danger-->

                        <?php

                                for($e = 0 ; $e < count($errors) ; $e++){
                                echo  "<li>$errors[$e]</li>";
                            }
                        ?>
                        </div>
                        <?php } ?>

                            <div class="form-group">
                                <label for="name" >Name</label>
                                <input type="text" name="name" class="form-control" autocomplete="off">
                            
                                
                            </div>


                            <div class="form-group">
                                <label for="email" >Email address</label>
                                <input type="email" name="email_address" class="form-control" id="email"  autocomplete="off">
                                <!---
                                <small id="emailHelp" class="form-text text-muted"></small>-->
                            </div>
                            <span id="emailMsg"></span>

                            <div class="form-group">
                                <label for="username" >User Name</label>
                                <input type="text" name="username" class="form-control" autocomplete="off">
                            
                                
                            </div>


                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="user_pass" type="password" class="form-control" id="password" >
                            </div>

                            <div class="form-group">
                                <!--for arrtipute is to show the cursor in input field if label is clicked-->
                                <label for="confirm password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm password">
                            </div>

                            <div class="form-group check-password">
                                <span id="error"></span>
                            </div>

                            <div class="form-group">
                                <label>User Role</label>
                                <select class="form-control" name="roles">
                                    <option>Select Role</option>
                                    <!--<option>Super Admin</option>-->
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                            </div>
                            <!------
                            <button type="button" onclick="checkPassword()" class="button" value="Log In"></button>
                                -->
                            
                            <button type="submit"  name="submit" onclick="checkPassword()" class="btn btn-primary">Create</button>
                            <a href="#" onclick="clearTxt()" class="btn btn-secondary">New</a>
                            
                        </form>

                    
                    </div>

                </div>
            
        </div>
            <!---end card-->

    </div>
        
</div>

  

</body>
</html>
