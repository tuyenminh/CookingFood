<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" data-spy="scroll" data-target=".navbar-example">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <!-- <img src="/template/admin/dist/img/login.jfif" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <i class="fa-sharp fa-solid fa-chart-simple"></i>
              <p>
                Loại công thức
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/loaicongthuc/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm loại công thức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/loaicongthuc/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách loại công thức</p>
                </a>
              </li>
            </ul>   
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <i class="fa-sharp fa-solid fa-chart-simple"></i>
              <p>
                Công thức
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/congthuc/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm công thức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/congthuc/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách công thức</p>
                </a>
              </li>
            </ul>   
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <i class="fa-sharp fa-solid fa-chart-simple"></i>
              <p>
                Loại khóa học 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/loaikhoahoc/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm loại khóa học</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/loaikhoahoc/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách khóa học</p>
                </a>
              </li>
            </ul>   
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Slider
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/sliders/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/sliders/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Slider</p>
                </a>
              </li>
            </ul>   
          </li>       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>