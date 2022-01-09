<!--- Sidemenu -->
<ul class="side-nav">
    <li class="side-nav-item">
        <a href="home.php" class="side-nav-link">
            <i class="uil-home-alt"></i>
            <span> Manage Books </span>
        </a>
    </li>
    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Accounts</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarEcommerce">
            <ul class="side-nav-second-level">
                <li>
                    <a href="admin.php">Admin</a>
                </li>
                <li>
                    <a href="students.php">Students</a>
                </li>

            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
            <i class="uil-envelope"></i>
            <span> Transactions </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarEmail">
            <ul class="side-nav-second-level">
                <li>
                    <a href="borrow.php">Borrow</a>
                </li>
                <li>
                    <a href="return.php">Return</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="side-nav-item">
        <a href="index.php" class="side-nav-link">
            <i class="uil-comments-alt"></i>
            <span> Logout </span>
        </a>
    </li>

</ul>
</div>
</li>
</ul>

<!-- end Help Box -->
<!-- End Sidebar -->
<div class="clearfix"></div>
</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<div class="content-page">
    <div class="content">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topbar-menu float-end mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        </span>
                        <span>
                            <span class="account-user-name">Admin Name</span>
                            <span class="account-position">Admin</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-circle me-1"></i>
                            <span>My Account</span>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout me-1"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
            <!-- <button class="button-menu-mobile open-left">
                <i class="mdi mdi-menu"></i>
            </button> -->
            <div>
                <h1>Welcome Admin</h1>
            </div>
        </div>
        <!-- end Topbar -->