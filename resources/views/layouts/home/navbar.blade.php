<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav menu w_menu ml-auto">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">
                Home
            </a>
        </li>
        <li class="nav-item {{ Request::is('/track*') ? 'active' : '' }}">
            <a class="nav-link" href="/">
                <a class="nav-link" href="/">
                Track Order
            </a>
        </li>
        <li class="nav-item {{ Request::is('/about') ? 'active' : '' }}">
            <a class="nav-link">
                <a class="nav-link" href="{{ route('about') }}">
                About
            </a>
        </li>
        <li class="nav-item {{ Request::is('/contact-us') ? 'active' : '' }}">
            <a class="nav-link">
                <a class="nav-link" href="{{ route('contact-us') }}">
                Contact Us
            </a>
        </li>
    </ul>
</div>
