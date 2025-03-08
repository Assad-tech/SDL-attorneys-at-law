<!-- Sidenav Menu Start -->
<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img style="height: 70px; width:60%;" src="{{ asset('admin/assets/images/logo-dark.png') }}"
                    alt="logo"></span>
            <span class="logo-sm"><img src="{{ asset('admin/assets/images/logo-sm-light.png') }}"
                    alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img style="height: 70px;" src="{{ asset('admin/assets/images/logo-dark.png') }}"
                    alt="dark logo"></span>
            <span class="logo-sm"><img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>
        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-view-dashboard"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item {{ Request::routeIs('admin.home-section.index') ? 'active' : '' }}">
                <a href="{{ route('admin.home-section.index') }}" class="side-nav-link">
                    <span class="menu-icon"><span class="mdi mdi-home-city-outline"></span></span>
                    <span class="menu-text"> Home </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('admin.manage.social.links')}}" class="side-nav-link">
                    <span class="menu-icon">
                        <span class="mdi mdi-message-alert-outline"></span>
                    </span>
                    <span class="menu-text">Social Links</span>
                </a>
            </li>
            {{-- Manage Content --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                    aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-file-document-outline"></i></span>
                    <span class="menu-text"> Site Content </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse {{ Request::routeIs('specific.child.route') ? 'show' : '' }}"
                    id="sidebarPagesAuth">
                    <ul class="sub-menu">

                        <li class="side-nav-item {{ Request::routeIs('specific.child.route') ? 'active' : '' }}">
                            <a href="{{route('admin.manage-content-section')}}" class="side-nav-link">
                                <span class="menu-text">Manage Content</span>
                            </a>
                        </li>
                        {{-- <li class="side-nav-item {{ Request::routeIs('specific.child.route') ? 'active' : '' }}">
                            <a href="{{route('admin.show-logo')}}" class="side-nav-link">
                                <span class="menu-text">Logo</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('admin.show-phone')}}" class="side-nav-link">
                                <span class="menu-text">Phone</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <span class="menu-text">Address</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <span class="menu-text">Why Choose Us Section</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <span class="menu-text">Footer Description</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>

            {{-- Meet our teem --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#meetOurTeam" aria-expanded="false" aria-controls="meetOurTeam"
                    class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-file-document-outline"></i></span>
                    <span class="menu-text"> Meet Our Team </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse " id="meetOurTeam">
                    <ul class="sub-menu">

                        <li class="side-nav-item {{ Request::routeIs('specific.child.route') ? 'active' : '' }}">
                            <a href="#" class="side-nav-link">
                                <span class="menu-text">Attorneys</span>
                            </a>
                        </li>
                        <li class="side-nav-item {{ Request::routeIs('specific.child.route') ? 'active' : '' }}">
                            <a href="{{route('admin.supporting.staff.manage')}}" class="side-nav-link">
                                <span class="menu-text">Supporting Staff</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Prative Area --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#practiceArea" aria-expanded="false" aria-controls="practiceArea"
                    class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-file-document-outline"></i></span>
                    <span class="menu-text"> Practice Area </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse " id="practiceArea">
                    <ul class="sub-menu">

                        <li class="side-nav-item {{ Request::routeIs('specific.child.route') ? 'active' : '' }}">
                            <a href="#" class="side-nav-link">
                                <span class="menu-text">Attorneys</span>
                            </a>
                        </li>
                        <li class="side-nav-item {{ Request::routeIs('specific.child.route') ? 'active' : '' }}">
                            <a href="#" class="side-nav-link">
                                <span class="menu-text">Supporting Staff</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{route('admin.blog.manage')}}" class="side-nav-link">
                    <span class="menu-icon">
                        <span class="mdi mdi-message-alert-outline"></span>
                    </span>
                    <span class="menu-text">Blog</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('admin.contact.manage')}}" class="side-nav-link">
                    <span class="menu-icon">
                        <span class="mdi mdi-message-alert-outline"></span>
                    </span>
                    <span class="menu-text">Contact</span>
                </a>
            </li>



            {{-- <li class="side-nav-item">
                <a href="{{ route('admin.contact-us') }}" class="side-nav-link">
                    <span class="menu-icon">
                        <span class="mdi mdi-message-alert-outline"></span>
                    </span>
                    <span class="menu-text">Contact us</span>
                </a>
            </li> --}}

        </ul>

        <div class="clearfix"></div>
    </div>
</div>
<!-- Sidenav Menu End -->