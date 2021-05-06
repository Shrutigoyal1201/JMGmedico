
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../img/shubham1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Shubham Yatharth</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                About
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addabout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="showabout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show About</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Brands
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addbrand.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Brand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="showbrand.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Brand</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Slider
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addslider.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="showslider.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Sliders</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="contactform.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact form</p>
                </a>
              </li>
            </ul>
        </li>


          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>    
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>