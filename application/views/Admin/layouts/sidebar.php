<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?=base_url()?>theme/admin/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">The Knotch</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    
                </li>
                 <li>
                    <a href="<?=base_url('AdminController/product_entry')?>"><i class="fa fa-book"></i> <span class="nav-label">Product Management</span> </a>
                    
                </li><li>
                    <a href="<?=base_url('AdminController/category_entry')?>"><i class="fa fa-book"></i> <span class="nav-label">Category Management</span> </a>
                    
                </li><li>
                    <a href="<?=base_url('AdminController/employee_form')?>"><i class="fa fa-edit"></i> <span class="nav-label">Employee Form</span> </a>
                    
                </li><li>
                    <a href="<?=base_url('admin-dashboard')?>"><i class="fa fa-book"></i> <span class="nav-label">Menu</span> </a>
                    
                </li><li>
                    <a href="<?=base_url('admin-dashboard')?>"><i class="fa fa-book"></i> <span class="nav-label">Menu</span> </a>
                    
                </li>

        </div>
    </nav>
