<div class="nav-header">
    <a href="#" class="brand-logo">
        <img class="logo-abbr"
            src="data:image/png;base64,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"
            alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>

<div class="chatbox">
    <div class="chatbox-close"></div>
    <div class="custom-tab-1">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="chat" role="tabpanel">
                <div class="card">
                    <div class="card-header chat-list-header text-center justify-content-center">
                        <div>
                            <h6 class="mb-1">Module List</h6>
                        </div>
                    </div>
                    <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                        <div class="p-3 justify-content-center"
                            style="
                        display:flex;
                        flex-wrap:wrap;
                        gap:20px;
                         ">
                            @foreach (auth()->user()->role as $role)
                                <li class="active dz-chat-user ">
                                    <div class="d-flex bd-highlight">
                                        @include('utils.boxbutton', [
                                            'url' => $role->module->url,
                                            'color' => $role->module->color,
                                            'title' => $role->module->title,
                                            'subtitle' => $role->module->subtitle,
                                        ])
                                    </div>
                                </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">

                    </div>
                </div>
                <ul class="navbar-nav header-right">

                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell bell-link" href="javascript:void(0)">
                            <i class="fa-solid fa-box"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <div class="header-info">
                                <span class="text-black">Hello,<strong>{{ auth()->user()->nama }}</strong></span>
                            </div>
                            <img src="{{ url(auth()->user()->foto) }}" width="20" alt="" srcset="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('jnepegawai/setting') }}" class="dropdown-item ai-icon">
                                <i class="fa fa-user"></i>
                                <span class="ml-2">Setting Profile </span>
                            </a>
                            <a href="{{ url('logout') }}" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                    width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
