<div class="col-3 col-sm-2 d-flex flex-column flex-shrink-0 p-3 text-black  " style="min-height: 768px; background-color: #F87575;">

<ul class="navbar-nav bg-gray-200 sidebar sidebar-light accordion" id="accordionSidebar" style="text-align: left">

    <div class="d-flex align-items-center mt-3 mb-2">
        <div class="flex-shrink-0 ms- 1">
            @if (empty($user->image))
            <i class="fa-solid fa-circle-user text-white">&nbsp;&nbsp;</i>
            @else
            @php
                $image = substr($user->image,6)

            @endphp
            <img src="{{ asset('storage/'.$image.'') }}" width="50" height="50" class="rounded-circle me-2" alt="...">
            @endif
        </div>
        <div class="flex-grow-1">
            <a style="color: white"><small style="font-size: 15px;">{{ $user->name }}</small></a>
        </div>
    </div>

    <li class="nav-item" >
        <h5 class="nav-link" style="color: white; margin-top:3ex" href="#">
            <span>MENU</span></h5>
    </li>

    <li class="nav-item">
        <a class="nav-link" style="color: white" href="{{ route('user.profile') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item" >
        <h5 class="nav-link" style="color: white" href="#">
            <span>OTHERS</span></h5>
    </li>

    <li class="nav-item">   
        <a class="nav-link" style="color: white" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-sign-out"></i>
            <span>Logout</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </li>


  </ul>
</div>
