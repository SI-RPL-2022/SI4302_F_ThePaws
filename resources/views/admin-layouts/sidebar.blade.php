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

<!-- Sidebar -->
<ul class="navbar-nav bg-gray-200 sidebar sidebar-light accordion" id="accordionSidebar" style="text-align: left">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="../BePro/img/Frame 35 (1) 2.png" alt="" width="30%">
        </div>
        <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
    </a>



    <!-- Nav Item - Dashboard -->
    <li class="nav-item" >
        <h5 class="nav-link" style="color: white" href="#">
            <span>MENU</span></h5>
    </li>
    <li class="nav-item" >
        <a class="nav-link" style="color: white" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" style="color: white" href="#">
            <i class="fas fa-fw fa-book"></i>
            <span>Article</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" style="color: white" href="{{ route('admin.category') }}" class="nav-link {{ (request()->is('admin/category*')) ? 'text-black' : 'text-muted' }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Category</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" style="color: white" href="#">
            <i class="fas fa-fw fa-user"></i>
            <span>Data User</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" style="color: white" href="#">
            <i class="fas fa-fw fa-paw"></i>
            <span>Adoption</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" style="color: white" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>CaRecommend</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" style="color: white" href="#">
            <i class="fas fa-fw fa-house"></i>
            <span>Pethouse</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item" >
        <h5 class="nav-link" style="color: white" href="#">
            <span>OTHERS</span></h5>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" style="color: white" href="#">
            <i class="fas fa-fw fa-sign-out"></i>
            <span>Logout</span></a>
    </li>


  </ul>
</div>
