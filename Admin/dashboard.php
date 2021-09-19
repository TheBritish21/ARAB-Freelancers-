<?php
   include('includes/header.php');
    //start navbar
    include('includes/navbar.php');
    if(!isset($_SESSION['userId'])){
    header("location:Admin_login.php");
    }
        //end navbar
?>         
        
        <div class="container">
            <div class="row">

                <!---start Sidebar-->
                <div class="col-md-3">
                    <?php
                        if(isset($_SESSION['role']) && $_SESSION['role'] ==1){

                            include('includes/admin-sidebar.php');

                        }else if(isset($_SESSION['role']) && $_SESSION['role'] ==2){
                            include('includes/user-sidebar.php');
                        }

                    ?>

                </div>
                <!---end Sidebar-->

                
                <div class="col-md-9">
                    <!---start alert-->
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Well Done Mate!</strong> Thanks For Your Time On Our Website!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                    <!----end alert-->


                    <!---start card-->
                    <div class="card"></div>
                        
                        <div class="card-header">
                            <?php
                                if(isset($_GET['page'])){
                                    $url = $_GET['page'];
                                    switch($url){
                                        case 'home': echo '<div class="pagehd"><i class="fas fa-tachometer-alt"></i> <b>Dashboard</b></div>';break;
                                        case 'create_user': echo '<div class="pagehd"><i class="fas fa-user-plus"></i><b> Create New User</b></div>';break;
                                        case 'manage_user': echo '<div class="pagehd"><i class="fas fa-user-cog"></i> <b>Manage Users</b></div>';break;
                                        case 'freelancers': echo '<div class="fpagehd"><i class="fas fa-laptop-house"></i> <b>Show Freelancers</b></div>';break;
                                        case 'edit': echo "<div class='pagehd'><i class='fas fa-user-edit'></i> <b>Edit User's data</b></div>";break;

                                        
                                    }
                
                                }else{
                                    echo '<div class="pagehd"><i class="fas fa-tachometer-alt"></i> <b>Dashboard</b></div>';
                                }

                            ?>
                        
                            <div class="card-body">
                                <?php
                                    if(isset($_GET['page'])){
                                        include($_GET['page'] . '.php');
                                    }else{
                                        include('home.php');
                                    }
                                
                                ?>
                                
                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>

                        </div>
                    
                </div>
                <!---end card-->

            </div>
                
        </div>
            


       
               
        <?php include('includes/footer.php')?>
            
    </body>
</html>