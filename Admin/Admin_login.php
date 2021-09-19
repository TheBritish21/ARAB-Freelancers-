<?php
    //require 'config.php';
    session_start();
    require 'functions.php';
    if(isset($_POST['submit'])){
        $userName = trim($_POST['username']);
        $password = $_POST['password'];

        if(empty($userName)){
            $userError = "user name is required";
        }

        if(empty($password)){
            $passError = "user name is required";
        }

    
    
        //login
        $login = "SELECT * FROM tbl_users 
                WHERE (username='$userName' OR email_address='$userName' )
                And user_pass='$password'";

                $check = mysqli_query($connection,$login);

                if(mysqli_num_rows($check) == 1){
                    $user = mysqli_fetch_array($check);
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['userId'] = $user['user_id'];
                    $_SESSION['role'] = $user['roles'];

                    header("location:dashboard.php");
                }else{
                    getMessage('Invalid Login','darkred');
                }
        
    }



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin Login</title>
        <!--Include CSS files-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="CSS/all.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        
        
    </head>
    <body>
    
        <a href="../index.php"><i class="fas fa-home"></i></a>

            <!--Main Image-->
            <div class="MainImage">
             <img src="Images/Key.png" alt="Key">
            </div>
        <!--Main Image ends-->


        <div class="container">

            <div class="login-form">
                <h1 class="text-center"><i class="fas fa-user-secret"></i> Please Login!</h1>
                <form method="post">
                    <input type="text" name="username" value="<?php if(isset($userName)) echo $userName; ?>" class="form-control" 
                            autofocus autocomplete="off"  placeholder="Enter User Name or Email Address">
                    <span class="spare">
                        <?php
                            if(isset($userError)){
                            echo $userError;
                        }
                        ?>
                    </span>
                    <input type="password" name="password" class="form-control"  placeholder="Enter Your Password" >
                    <span class="spare">
                        <?php
                            if(isset($passError)){
                                echo $passError;
                            }
                        ?>
                    </span>
                    <button type="submit" name="submit" class="btn btn-primary">Log In</button>            
                </form>
                <a href="#" class="text-center">Forgotten password?</a>
            </div>    
        </div>

         

      <!--Include JS files-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="JS/bootstrap.min.js"></script>      
    </body>
</html>