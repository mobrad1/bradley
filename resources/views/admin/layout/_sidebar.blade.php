<div class="menu-w color-scheme-dark color-style-bright menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
    <div class="logo-w">
        <a class="logo" href="index.html">
            <div class="logo-element"></div>
            <div class="logo-label">
                Peexoo Admin
            </div>
        </a>
    </div>
    <div class="logged-user-w avatar-inline">
        <div class="logged-user-i">
            <div class="avatar-w">
                <img alt="" src="{{asset('img/avatar1.png')}}">
            </div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">
                   {{auth()->user()->name}}
                </div>
                <div class="logged-user-role">
                    Administrator
                </div>
            </div>
        </div>
    </div>

    <ul class="main-menu">
        <li class="selected">
            <a href="">
                <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sub-header">
            <span>Business</span>
        </li>
        <li>
            <a href="{{route('admin.business')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div>
                <span>Create Business</span>
            </a>
        </li>
        <li>
            <a href="{{route('admin.business.manage')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div>
                <span>Manage</span>
            </a>
        </li>
        <li>
            <a href="{{route('admin.business.images')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div>
                <span>Setup Images</span>
            </a>
        </li>

        <li class="sub-header">
            <span>Categories</span>
        </li>
        <li>
            <a href="{{route('admin.category')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                </div>
                <span>Manage</span>
            </a>
        </li>
    </ul>
</div>