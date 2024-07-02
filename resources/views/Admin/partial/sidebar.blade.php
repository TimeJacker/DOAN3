<div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="#" class="text-nowrap logo-img">
        <img src="{{ asset('User/') }}/image/logo1.png" width="180" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu"></span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('dashboardIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Bảng điều khiển</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Sản phẩm</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('categoryIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Danh mục sản phẩm</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('productIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-alert-circle"></i>
            </span>
            <span class="hide-menu">Quản lý Sản phẩm</span>
          </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Thông tin</span>
          </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('orderIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-cards"></i>
            </span>
            <span class="hide-menu">Quản lý đơn hàng</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('warehouseIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-file-description"></i>
            </span>
            <span class="hide-menu">Quản lý kho hàng</span>
          </a>
        </li>
         <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('customerIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-typography"></i>
            </span>
            <span class="hide-menu">Quản lý khách hàng</span>
          </a>
        </li>
         <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('accountIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-typography"></i>
            </span>
            <span class="hide-menu">Quản lý Tài khoản</span>
          </a>
        </li>
        
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('providersIndex')}}" aria-expanded="false">
              <span>
            <i class="ti ti-typography"></i>
              </span>
            <span class="hide-menu">Quản lý Nhà cung cấp</span>
        </a>
        </li>
        
      
      </ul>
      
    </nav>
    <!-- End Sidebar navigation -->
  </div>
