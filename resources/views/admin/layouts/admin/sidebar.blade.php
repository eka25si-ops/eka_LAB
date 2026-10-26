<ul class="nav flex-column pt-3 pt-md-0">
    <!-- Menu Dashboard -->
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="nav-link">
            <span class="sidebar-icon">
                <!-- Icon Dashboard -->
            </span>
            <span class="sidebar-text">Dashboard</span>
        </a>
    </li>

    <!-- Menu Pelanggan -->
    <li class="nav-item {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
        <a href="{{ route('pelanggan.index') }}" class="nav-link">
            <span class="sidebar-icon">
                <!-- Icon Pelanggan -->
            </span>
            <span class="sidebar-text">Pelanggan</span>
        </a>
    </li>
