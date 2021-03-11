<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link" style="background: #333">
        <img src="/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-2 pb-1 mb-2 d-flex">
        <div class="image">
            <img src="/backend/dist/img/avatar5.png" style="width: 2.5rem !important;margin-top: 12px !important;" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="text-transform: capitalize;">{{optional($data)->name}}</a>
          <span class="badge badge-warning" style="text-transform: capitalize;">{{optional($data)->type}}</span>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview menu-open">
              <a href="{{route('dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
          </li>

          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user text-orange"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none; margin-left:20px;">
              <li class="nav-item" style="font-size: 15px;">
                <a href="#" class="nav-link">
                  <i class="fa fa-check-circle nav-icon" aria-hidden="true"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li> --}}


          <li class="nav-item has-treeview">
            <a href="{{route('categories')}}" class="nav-link">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>
                Manage Category
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('demos')}}" class="nav-link">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>
                Manage Demo
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('contact.list')}}" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>
