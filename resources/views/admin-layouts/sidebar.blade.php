<div class="col-3 col-sm-2 d-flex flex-column flex-shrink-0 p-3 text-black " style="min-height: 768px; background-color: #F87575;">
    <ul class="navbar-nav justify-content-end">
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
    </ul>
</div>
