<nav class="main-header navbar navbar-expand bg-maria-gradient">
    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-dark text-lg" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
    </ul>

    
    

    
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link mx-2 text-white text-lg" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge text-white text-bold">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <form class="inline" method="POST" action="/logout">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger"><i class="fa fa-sign-out"></i>
                    <span class="d-none d-sm-inline">Logout</span></button>
            </form>
            
        </li>

        
    </ul>
</nav><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/layouts/partials/admin/navbar.blade.php ENDPATH**/ ?>