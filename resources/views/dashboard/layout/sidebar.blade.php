<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ $menu == 'dashboard' ? '' : 'collapsed' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link  {{ $menu == 'profil' ? '' : 'collapsed' }}" href="/profile">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $menu == 'patient' ? '' : 'collapsed' }}" data-bs-target="#rm-nav"
                data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Website</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="rm-nav" class="nav-content collapse {{ $menu == 'patient' ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/patient" class="{{ $menu == 'patient' ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Pasien</span>
                    </a>
                </li>
                <li>
                    <a href="/treatment">
                        <i class="bi bi-circle"></i><span>Pengobatan</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Home</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

</aside>
