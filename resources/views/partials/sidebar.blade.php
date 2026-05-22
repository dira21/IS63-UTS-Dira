<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    {{-- Brand --}}
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Toko Senjata</div>
    </a>

    <hr class="sidebar-divider my-0">

    {{-- Menu: Dashboard --}}
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">Data Master</div>

    {{-- <li class="nav-item {{ request()->routeIs('categories.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fas fa-fw fa-tags"></i>
            <span>Kategori Senjata</span>
        </a>
    </li> --}}

    {{-- <li class="nav-item {{ request()->routeIs('suppliers.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('suppliers.index') }}">
            <i class="fas fa-fw fa-truck"></i>
            <span>Supplier</span>
        </a>
    </li> --}}

    {{-- <li class="nav-item {{ request()->routeIs('weapons.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('weapons.index') }}">
            <i class="fas fa-fw fa-gun"></i>
            <span>Senjata</span>
        </a>
    </li> --}}

    <hr class="sidebar-divider d-none d-md-block">

    {{-- Sidebar Toggler --}}
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>