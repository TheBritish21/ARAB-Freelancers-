<?php
    //require 'admin/config.php';
    require 'Admin/includes/header.php';
    if(isset($_POST['submit'])){

    //uploaded Directory
       $dir = dirname(__FILE__) . '/Admin/uploaded/' ;

        $path = $_FILES['photo']['tmp_name'];
        $file_name = $_FILES['photo']['name'];

        move_uploaded_file($path,$dir.$file_name);

        $name = $_POST['f_name'];
        $phone = $_POST['f_phone'];
        $email = $_POST['f_email'];
        $desc = $_POST['description'];

        $addFreelancer = "INSERT INTO `tbl_freelancers`(`f_id`, `f_name`, `f_phone`, `f_email`, `photo`) 
        VALUES (Null,'$name','$phone','$email','$file_name')";

        if(mysqli_query($connection,$addFreelancer)){

            $last_id = mysqli_insert_id($connection);
            mysqli_query($connection,"INSERT Into `details` 
            VALUES (Null,'$desc','$last_id')");
            

            $success = 'Data Saved Successfuly.';
        }


    } 
    ?>

<div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="name" >Name</label>
                                <input type="text" name="f_name" class="form-control" autocomplete="off">
                        
                            </div>

                            <div class="form-group">
                                <label for="name" >Phone</label>
                                <input type="text" name="f_phone" class="form-control" autocomplete="off">
                        
                            </div>

                            <div class="form-group">
                                <label for="name" >Description</label>
                                <input type="text" name="description" class="form-control" autocomplete="off">
                        
                            </div>


                            <div class="form-group">
                                <label for="email" >Email address</label>
                                <input type="email" name="f_email" class="form-control" id="email"  autocomplete="off">
                                <!---
                                <small id="emailHelp" class="form-text text-muted"></small>-->
                            </div>
                            <span id="emailMsg"></span>

                
                         <!--- 
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="user_pass" type="password" class="form-control" id="password" >
                            </div>

                            <div class="form-group">
                                <!--for arrtipute is to show the cursor in input field if label is clicked 
                                <label for="confirm password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm password">
                            </div>  
                            -->
                            

                            <div class="form-group">
                                <label for="name" >Photo</label>
                                <input type="file" name="photo" class="form-control" >
                        
                            </div>
                            
                            <button type="submit"  name="submit" onclick="checkPassword()" class="btn btn-primary">Register</button>

                            
                        </form>

                    
                    </div>