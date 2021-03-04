 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets_admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets_admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}
      <!-- sidebar menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->       
          
          <li class="nav-item">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Responses
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              {{-- <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="nav-icon fas fa-store"></i>
                  <p>Stores</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="/admin/account" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Account</p>
                </a>
              </li>              
            </ul>
          </li>

          <a href="/logout" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
            <p>
              Logout               
            </p>
          </a>  
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>