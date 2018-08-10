<header class="header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a id="toggle-btn" href="#" class="menu-btn">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="index.html" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block">
                            <span>Sistema </span>
                            <strong class="text-primary">Reposteria</strong>
                        </div>
                    </a>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link logout"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout <i class="fas fa-sign-out-alt"></i>
                        </a>
                       
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>