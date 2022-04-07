<div class="col-3 col-sm-2 d-flex flex-column flex-shrink-0 p-3 text-black " style="min-height: 768px; background-color: #F87575;">
    {{-- <ul class="navbar-nav justify-content-end">
        <li class="nav-item"> <b>MENU</b>

        </li>
        <li class="nav-item"> Dashboard

        </li>
        <li class="nav-item"> Article

        </li>
        <li class="nav-item">
            <a href="{{ route('admin.category') }}" class="nav-link {{ (request()->is('admin/category*')) ? 'text-black' : 'text-muted' }}">
                Category
            </a>
        </li>
        <li class="nav-item"> Data User

        </li>
        <li class="nav-item"> Adoption

        </li>
        <li class="nav-item"> CaRecommend

        </li>
        <li class="nav-item"> PetHouse

        </li>
        <li class="nav-item"> <b>OTHERS</b>

        </li>
        <li class="nav-item"> Logout

        </li>
    </ul> --}}

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Contacts</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
</div>
