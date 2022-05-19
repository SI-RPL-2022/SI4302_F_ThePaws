<div class="col-3 col-sm-2 d-flex flex-column flex-shrink-0 p-3 text-black "
    style="min-height: 768px; background-color: #F87575;">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-200 sidebar sidebar-light accordion" id="accordionSidebar" style="text-align: left">
        <div class="d-flex align-items-center mt-3 mb-2">
            <div class="flex-shrink-0 ms- 1">
                <img src="/img/UserProfileJennie.png" width="50" height="50" class="rounded-circle me-2" alt="...">
            </div>
            <div class="flex-grow-1">
                <a style="color: white"><small style="font-size: 15px;">{{ auth()->user()->name }}</small></a>
            </div>
        </div>

        <li class="nav-item">
            <h5 class="nav-link" style="color: white" href="#">
                <span>MENU</span>
            </h5>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" href="{{ route('admin.home') }}"
                class="nav-link {{ request()->is('admin/dashboard*') ? 'text-black' : 'text-muted' }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" style="color: white" href="{{ route('blogs.admin') }}">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Article</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" style="color: white" href="{{ route('admin.category') }}"
                class="nav-link {{ request()->is('admin/category*') ? 'text-black' : 'text-muted' }}">
                <i class="fas fa-fw fa-list"></i>
                <span>Category</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" style="color: white" href="#">
                <i class="fas fa-fw fa-user"></i>
                <span>Data User</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" style="color: white" href="#">
                <i class="fas fa-fw fa-paw"></i>
                <span>Adoption</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" href="{{ route('admin.carecommend') }}">
                <i class="fas fa-fw fa-bone"></i>
                <span>CaRecommend</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" style="color: white" href="{{ route('admin.pethouse') }}">
                <i class="fas fa-fw fa-house"></i>
                <span>Pethouse</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <h5 class="nav-link" style="color: white" href="#">
                <span>OTHERS</span>
            </h5>
        </li>

        <li class="nav-item">
            <a class="nav-link" style="color: white" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                <i class="fas fa-fw fa-sign-out"></i>
                <span>Logout</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>


    </ul>
</div>
