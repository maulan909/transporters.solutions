<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">
                <div class="h-25 fs-6 m-0 p-0">Transporter</div>
                <small>Fleet Solution</small>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">TP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}">
                <a href="/dashboard" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('landing-page') ? 'active' : '' }}">
                <a href="/landing-page"><i class="fas fa-home"></i><span>Landing Page Setting</span></a>
            </li>
            <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
                <a href="/services"><i class="fas fa-concierge-bell"></i><span>Service</span></a>
            </li>
            <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
                <a href="/posts"><i class="fas fa-newspaper"></i><span>Posts</span></a>
            </li>
            {{-- <li class="nav-item {{ Request::is('comments') ? 'active' : '' }}">
                <a href="/comments"><i class="fas fa-comments"></i><span>Comments</span></a>
            </li> --}}
            <li class="nav-item {{ Request::is('pages') ? 'active' : '' }}">
                <a href="/pages"><i class="fas fa-file"></i><span>Pages</span></a>
            </li>
            <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
                <a href="/users"><i class="fas fa-users"></i><span>Users</span></a>
            </li>
            <li class="nav-item {{ Request::is('website-settings') ? 'active' : '' }}">
                <a href="/website-settings"><i class="fas fa-cogs"></i><span>Website Settings</span></a>
            </li>
            <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
                <a href="/profile"><i class="fas fa-user"></i><span>Profile</span></a>
            </li>
            <li class="nav-item {{ Request::is('change-password') ? 'active' : '' }}">
                <a href="/change-password"><i class="fas fa-lock"></i><span>Change Password</span></a>
            </li>
            <li class="nav-item {{ Request::is('logout') ? 'active' : '' }}">
                <a href="/logout"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
            </li>
        </ul>
    </aside>
</div>