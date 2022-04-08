<div class="mdk-drawer  js-mdk-drawer"
                         id="default-drawer"
                         data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left sidebar-p-t"
                data-perfect-scrollbar>
            <div class="sidebar-block p-0 mb-0">
                <ul class="sidebar-menu"
                    id="components_menu">
                    <li class="sidebar-menu-item {{ Request::is('manage-invoices*') ? ' active' : '' }}">
                        <a class="sidebar-menu-button"
                            href="{{ route('invoices.index') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i>
                            <span class="sidebar-menu-text">Manage Invoices</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ Request::is('settings') ? ' active' : '' }}">
                        <a class="sidebar-menu-button"
                            href="{{ route('settings.index') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons {{ Request::is('settings') ? ' active' : '' }}">settings</i>
                            <span class="sidebar-menu-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
