<div class="wrapper">
    <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">

        </button>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                    <i class="fe fe-sun fe-16"></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar avatar-sm mt-2">
              <img src="{{asset('front/')}}/./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
            </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Profil</a>
                    <a class="dropdown-item" href="#">Site Ayarları</a>
                </div>
            </li>
        </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100 mb-4 d-flex">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <img width="120" height="60" src="{{asset('front/')}}/assets/images/logo.png">
                </a>
            </div>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Referanslar</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('references.index')}}"><span class="ml-1 item-text"></span>
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text">Tüm Referanslar</span>
                    </a>
                </li>
            </ul>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('references.create')}}"><span class="ml-1 item-text">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Referans Ekle</span>
                    </a>
                </li>
            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Hizmetlerimiz</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services.index')}}"><span class="ml-1 item-text">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Tüm Hizmetler</span>
                    </a>
                </li>
            </ul>
            </p>

            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services.create')}}"><span class="ml-1 item-text">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Hizmet Ekle</span>
                    </a>
                </li>
            </ul>

            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Web Site Bilgileri</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('teams.index')}}"><span class="ml-1 item-text">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Ekibimiz</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('teams.create')}}"><span class="ml-1 item-text">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Ekip Üyesi Ekle</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about.index')}}"><span class="ml-1 item-text">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Hakkkımızda Bilgileri</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.index')}}"><span class="ml-1 item-text">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">İletişim Bilgileri</span>
                    </a>
                </li>
            </ul>


            </p>
        </nav>
    </aside>
