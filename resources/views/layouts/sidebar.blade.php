
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img width="75px" src="{{ url('userImage/'.  Auth::user()->image  ) }}" class="img-xs rounded-circle" alt="User Image">
          <a class="name-profile" style="color:black;" href="" >{{ Auth::user()->name }}</a>
        </div>
        <div class="info">
          <a href="user/edit" class="d-block" style="font-size:20px;"> 
         
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-header">SETTING</li>
          <li class="nav-item mb-2">
            <a href="/user" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                User Management
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="/category" class="nav-link">
              <i class="nav-icon fa fa-newspaper"></i>
              <p>
                Kategori
                <span class="badge badge-info right">100</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/article" class="nav-link">
              <i class="nav-icon fa fa-newspaper"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>