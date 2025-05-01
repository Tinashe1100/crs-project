<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">
                <span class="logo-name">Dashboard</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Reported Cases</li>

            <li><a class="nav-link" href="{{ route('cases') }}"><i data-feather="file"></i><span> Reports
                    </span></a></li>
            <li class="menu-header">Users</li>

            <li><a class="nav-link" href="{{ route('profile') }}"><i data-feather="sliders"></i><span>Profile</span></a>
            </li>

            <li><a class="nav-link" href="{{ route('users') }}"><i data-feather="sliders"></i><span>Users</span></a>
            </li>

            {{-- <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="chevrons-down"></i><span>Multilevel</span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Menu 1</a></li>
                    <li class="dropdown">
                        <a href="#" class="has-dropdown">Menu 2</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Child Menu 1</a></li>
                            <li class="dropdown">
                                <a href="#" class="has-dropdown">Child Menu 2</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Child Menu 1</a></li>
                                    <li><a href="#">Child Menu 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Child Menu 3</a></li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </aside>
</div>
