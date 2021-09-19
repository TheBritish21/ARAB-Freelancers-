<div class="list-group">
                        <a href="dashboard.php?page=home" class="list-group-item list-group-item-action active">
                            <i class="fas fa-tachometer-alt"></i>  Dashboard
                        </a>
                        <a href="dashboard.php?page=create_user" class="list-group-item list-group-item-action" ><i class="fas fa-user-plus"></i> Create User </a>
                        
                        <a href="dashboard.php?page=manage_user" class="list-group-item list-group-item-action">
                            <i class="fas fa-user-cog"></i> Manage Users <span class="badge badge-primary"><?=getTotals('tbl_users')?></span></a>
                        
                            <a href="dashboard.php?page=freelancers" class="list-group-item list-group-item-action">
                            <i class="fas fa-laptop-house"></i> Freelancers <span class="badge badge-danger"><?= getTotals('tbl_freelancers')?></span></a>
                        
                    </div> 