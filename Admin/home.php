    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    
            <div class="card-body">
                <div class="row">
                    <!--create user-->
                    <div class="col-md-4">
                        <div class="card" style="width: 200px;">
                            <div class="card-body">
                                <i class="fas fa-user-cog fa-3x" style="color: rgb(175, 173, 167);"></i>
                                <a href="create_user.html">
                                <h3>Create User</h3>
                            </a>
                            </div>
                        </div>
                    </div>

                    <!--Manage user-->
                    <div class="col-md-4">
                        <div class="card" style="width: 200px;">
                            <div class="card-body">
                                <a href="manage_user.html">    
                                    <div style="text-align: center;">
                                        <i class="fas fa-users fa-3x" style="color: rgb(175, 173, 167);"></i>
                                        <h2><?=getTotals('tbl_users')?></h2>
                                        <h3>Users</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--Freelancers-->
                    <div class="col-md-4">
                        <div class="card" style="width: 200px;">
                            <div class="card-body">
                                <a href="freelancers.html">    
                                    <div style="text-align: center;">
                                        <i class="fas fa-laptop-house fa-3x" style="color: rgb(175, 173, 167);"></i>
                                        <h2><?= getTotals('tbl_freelancers')?></h2>
                                        <h3>Freelancers</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
    </html>            