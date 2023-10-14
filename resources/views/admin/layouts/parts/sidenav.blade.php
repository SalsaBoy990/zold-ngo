<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-2 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">

                <div class="avatar-lg me-4">
                    <img src="/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
                         alt="Bonnie Green">
                </div>

                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Jane</h2>
                    <a href="/login" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <x-icon.signout></x-icon.signout>
                        Sign Out
                    </a>
                </div>

            </div>

            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                   aria-controls="sidebarMenu"
                   aria-expanded="true" aria-label="Toggle navigation">
                    <x-icon.close></x-icon.close>
                </a>
            </div>
        </div>

        <ul class="nav flex-column pt-3 pt-md-0">

            <li class="nav-item">
                <a href="/dashboard" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon me-3">
                        <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">Volt Laravel</span>
                </a>
            </li>


            <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <x-icon.pie></x-icon.pie>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>


            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                      data-bs-toggle="collapse"
                      data-bs-target="#submenu-laravel" aria-expanded="true">
                    <span>
                        <span class="sidebar-icon"><i class="fab fa-laravel me-2" style="color: #fb503b;"></i></span>
                        <span class="sidebar-text" style="color: #fb503b;">Laravel Examples</span>
                    </span>
                    <span class="link-arrow">
                        <x-icon.link-arrow></x-icon.link-arrow>
                    </span>
                </span>

                <div class="multi-level collapse show" role="list" id="submenu-laravel" aria-expanded="false">
                    <ul class="flex-column nav">

                        <li class="nav-item {{ Request::segment(1) == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}" class="nav-link">
                                <span class="sidebar-text">Profile</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::segment(1) == 'users' ? 'active' : '' }}">
                            <a href="{{ route('users') }}" class="nav-link">
                                <span class="sidebar-text">User management</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item {{ Request::segment(1) == 'transactions' ? 'active' : '' }}">
                <a href="{{ route('transactions') }}" class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <x-icon.bank-card></x-icon.bank-card>
                        </span>
                        <span class="sidebar-text">Transactions</span>
                    </span>

                    <span>
                        <span class="badge badge-sm bg-secondary ms-1">New</span>
                    </span>
                </a>
            </li>


            <li class="nav-item">
                <span
                    class="nav-link {{ Request::segment(1) !== 'bootstrap-tables' ? 'collapsed' : '' }} d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-app">
                    <span>
                        <span class="sidebar-icon">
                            <x-icon.table></x-icon.table>
                        </span>
                        <span class="sidebar-text">Tables</span>
                    </span>
                    <span class="link-arrow">
                        <x-icon.link-arrow></x-icon.link-arrow>
                    </span>
                </span>

                <div class="multi-level collapse {{ Request::segment(1) == 'bootstrap-tables' ? 'show' : '' }}"
                     role="list"
                     id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'bootstrap-tables' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('bootstrap.tables') }}">
                                <span class="sidebar-text">Bootstrap Tables</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                      data-bs-toggle="collapse"
                      data-bs-target="#submenu-pages">
                    <span>
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                      clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Page examples</span>
                    </span>
                    <span class="link-arrow">
                        <x-icon.link-arrow></x-icon.link-arrow>
                    </span>
                </span>

                <div class="multi-level collapse" role="list" id="submenu-pages" aria-expanded="false">
                    <ul class="flex-column nav">

                        <li class="nav-item">
                            <a class="nav-link" href="/reset-password">
                                <span class="sidebar-text">Reset password</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/lock">
                                <span class="sidebar-text">Lock</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('500') }}">
                                <span class="sidebar-text">500 Not Found</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                      data-bs-toggle="collapse"
                      data-bs-target="#submenu-components">
                    <span>
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                            <path fill-rule="evenodd"
                                  d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                  clip-rule="evenodd"></path>
                          </svg>
                        </span>
                        <span class="sidebar-text">Components</span>
                    </span>

                    <span class="link-arrow">
                        <x-icon.link-arrow></x-icon.link-arrow>
                    </span>
                </span>
                <div
                    class="multi-level collapse {{ Request::segment(1) == 'buttons' || Request::segment(1) == 'notifications' || Request::segment(1) == 'forms' || Request::segment(1) == 'modals' || Request::segment(1) == 'typography' ? 'show' : '' }}"
                    role="list" id="submenu-components" aria-expanded="false">

                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'buttons' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('buttons') }}">
                                <span class="sidebar-text">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'notifications' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('notifications') }}">
                                <span class="sidebar-text">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'forms' ? 'active' : '' }}">
                            <a class="nav-link" href="/forms">
                                <span class="sidebar-text">Forms</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'modals' ? 'active' : '' }}">
                            <a class="nav-link" href="/modals">
                                <span class="sidebar-text">Modals</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'typography' ? 'active' : '' }}">
                            <a class="nav-link" href="/typography">
                                <span class="sidebar-text">Typography</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            <li class="nav-item">
                <a href="/documentation/getting-started/overview/index.html" target="_blank"
                   class="nav-link d-flex align-items-center">
          <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                          xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                    clip-rule="evenodd"></path>
            </svg></span>
                    <span class="sidebar-text">Documentation </span> <span><span
                            class="badge badge-sm bg-secondary ms-1">v1.0</span></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon me-2">
            <img class="me-2" src="/assets/img/themesberg.svg" height="20" width="20" alt="Themesberg Logo">
          </span>
                    <span class="sidebar-text">Themesberg</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://updivision.com" target="_blank" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon me-2">
            <img class="me-2" src="/assets/img/updivision.png" height="20" width="20" alt="Themesberg Logo">
          </span>
                    <span class="sidebar-text">Updivision</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/upgrade-to-pro"
                   class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
          <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                    clip-rule="evenodd"></path>
            </svg>
          </span>
                    <span>Upgrade to Pro</span>
                </a>
            </li>
        </ul>
    </div>
</nav>