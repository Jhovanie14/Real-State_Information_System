
<aside class="main-sidebar sidebar-light-primary elevation-4">
    
    

    
    <div class="sidebar">
        
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(session('emp_image') ? asset('images/employees/' . session('emp_image')) : asset('/images/default.png')); ?>"
                    class="img-circle elevation-2" alt="User Image"
                    style="
                    border-radius: 50%;
                    height: 35px;
                    width: 35px;
                    object-fit: cover;
                    object-position: center;">
            </div>
            <div class="info">
                <a href="<?php echo e(action('UserController@main')); ?>" class="d-block"> <?php echo e(session('emp_full_name')); ?></a>
            </div>
        </div>

        
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">


                <li class="nav-item">
                    <a href="<?php echo e(action('MainController@home')); ?>" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-header text-lg text-bold">
                    CLIENTS
                </li>
                <li class="nav-item">
                    <a href="/clients" class="nav-link">
                        <i class="far nav-icon fas fa-users"></i>
                        <p>Clients</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/clients/create" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Add Client</p>
                    </a>
                </li>


                
                <li class="nav-header text-lg text-bold">
                    BROKERS & AGENTS
                </li>
                <li class="nav-item">
                    <a href="/brokers" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-tie"></i>
                        <p>Brokers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/agents" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Agents</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/brokers/create" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Add Broker</p>
                    </a>
                </li>

                <li class="nav-header text-lg text-bold">
                    PROPERTIES
                </li>
                
                

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-house-chimney"></i>
                        <p>
                            View Properties
                            <i class="right fas fa-flip-both fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/properties/in-house" class="nav-link">
                                <i class="fas nav-icon"></i>
                                <p>In-House Properties</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/properties/hdmf-loan" class="nav-link">
                                <i class="fas nav-icon"></i>
                                <p>HDMF Properties&nbsp;</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                

                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            View Reservations
                            <i class="right fas fa-flip-both fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/reservations/in-house" class="nav-link">
                                <i class="fas nav-icon"></i>
                                <p>In-House Payments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/reservations/hdmf-loan" class="nav-link">
                                <i class="fas nav-icon"></i>
                                <p>HDMF Loans&nbsp;</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-plus"></i>
                        <p>
                            Place Reservation
                            <i class="right fas fa-flip-both fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/reservations/create/in-house" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>In-House Payment</p>
                                <i class="right fas fa-plus "></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/reservations/create/hdmf-loan" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>HDMF Loan&nbsp;</p>
                                <i class="right fas fa-plus "></i>
                            </a>
                        </li>
                    </ul>
                </li>


                



                
                <li class="nav-header text-lg text-bold">
                    OTHERS
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(action('MessageController@main')); ?>" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>Messages</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(action('EventController@main')); ?>" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(action('DownloadController@main')); ?>" class="nav-link">
                        <i class="nav-icon fa fa-cloud"></i>
                        <p>File Downloads</p>
                    </a>
                </li>
                <li class="nav-item mb-5">
                    <a href="<?php echo e(action('UpdateController@main')); ?>" class="nav-link">
                        <i class="nav-icon fa fa-history"></i>
                        <p>
                            System Updates
                        </p>
                    </a>
                </li>

                

                






                

            </ul>
        </nav>
    </div>
</aside>

<?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/layouts/partials/admin/sidebar.blade.php ENDPATH**/ ?>