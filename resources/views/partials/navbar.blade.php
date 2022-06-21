<nav class="navbar navbar-expand-lg navbar-light bg-paws custom-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="The Paws Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <a class="nav-link text-white active" href="/">Home</a>
                <a class="nav-link text-white" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="true">Services</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('adoption.index') }}" style="text-decoration: none; color:black; margin-left:2ex">Adoption</a>
                    </li>
                    <li><a href="/blogs" style="text-decoration: none; color:black; margin-left:2ex">Blogs</a>
                    </li>
                    <li><a href="/carecommend" style="text-decoration: none; color:black; margin-left:2ex">CaRecommend</a>
                    </li>
                    <li><a href="/pethouse" style="text-decoration: none; color:black; margin-left:2ex">PetHouse</a>
                    </li>
                </ul>
                <a class="nav-link text-white" href="/aboutus">About Us</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item mx-3">
                        <div class="dropdown">
                            <button type="button" class="btn text-white" id="dropdownMenuBtn1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-circle-user"></i>
                                &nbsp;&nbsp;{{ auth()->user()->name }}&nbsp;&nbsp;
                                <i class="fa-solid fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuBtn1">
                                <li>
                                    @if (auth()->user()->is_admin == 1)
                                        <a href="{{ route('admin.home') }} "
                                            class="dropdown-item text-decoration-none text-black">
                                            <i class="fa-solid fa-gear"></i></i>&nbsp;&nbsp;Dashboard Admin</a>
                                    @elseif(auth()->user()->is_admin == 0)
                                        <a href="{{ route('user.profile') }} "
                                            class="dropdown-item text-decoration-none text-black">
                                            <i class="fa-solid fa-circle-user"></i>&nbsp;&nbsp;Profile</a>
                                    @endif
                                </li>
                                <hr>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        <span>Logout</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white sign-in-button paws-blue-btn" href="/login">Sign
                            In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white sign-up-button paws-blue-btn"
                            href="/register">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
