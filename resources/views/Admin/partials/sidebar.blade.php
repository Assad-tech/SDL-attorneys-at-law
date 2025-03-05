<!-- Sidenav Menu Start -->
<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img style="height: 70px;" src="{{ asset('admin/assets/images/logo-dark.png') }}"
                    alt="logo"></span>
            <span class="logo-sm"><img src="{{ asset('admin/assets/images/logo-sm-light.png') }}" alt="small logo"></span>
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

            <li class="side-nav-item">

                <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-view-dashboard"></i></span>
                    <span class="menu-text"> Dashboard </span>
                    {{-- <span class="badge bg-success rounded-pill">5</span> --}}
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.home-section.index') }}" class="side-nav-link">
                    <span class="menu-icon">
                        <span class="mdi mdi-home-city-outline"></span>

                    </span>
                    <span class="menu-text"> Home </span>
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
