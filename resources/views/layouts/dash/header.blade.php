<div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
    <div class="mdk-header__content">

        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
            <div class="container-fluid p-0">

                <!-- Navbar toggler -->

                <button class="navbar-toggler navbar-toggler-right d-block d-lg-none" type="button"
                    data-toggle="sidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Brand -->
                <a href="/" class="navbar-brand ">
                    <span>{{ config('app.short_name') }}</span>
                </a>

                <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                    <li class="nav-item dropdown">
                        <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                            data-caret="false">
                            <span class="mr-1 d-flex-inline">
                                <span class="text-light">{{ auth()->user()->name }}</span>
                            </span>
                            <img src="{{ asset('assets/images/avatar/demi.png') }}" class="rounded-circle" width="32" alt="Frontted">
                        </a>
                        <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-item-text dropdown-item-text--lh">
                                <div><strong>{{ auth()->user()->name }}</strong></div>
                                <div class="text-muted">{{ auth()->user()->email }}</div>
                            </div>
                            <div class="dropdown-divider"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a
                                    class="dropdown-item"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                >
                                    <i class="material-icons">exit_to_app</i> Logout
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</div>
