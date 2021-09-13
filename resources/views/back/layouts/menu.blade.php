


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Fatih <sup>AVCI</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Anasayfa</span></a>
            </li>
            
              <li class="nav-item @if(Request::segment(2)=='hakkimizda') active @endif">
                <a class="nav-link" href="{{route('admin.hakkimizda')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Hakkımızda</span></a>
            </li>
            <li class="nav-item @if(Request::segment(2)=='ayarlar') active @endif">
                <a class="nav-link" href="{{route('admin.ayarlar')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Ayarlar</span></a>
            </li>
            <li class="nav-item @if(Request::segment(2)=='iletisimanasayfa') active @endif">
                <a class="nav-link"  href="{{route('admin.iletisimanasayfa')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>İletişim Anasayfa</span></a>
            </li>
            
           @if(Auth::user()->id==1)
           <li class="nav-item @if(Request::segment(2)=='kullanici') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo12"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kullanıcılar</span>
                </a>
                <div id="collapseTwo12" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{route('admin.kullanici.liste')}}">Liste</a>
                        <a class="collapse-item" href="{{route('admin.kullanici.ekle')}}">Ekle</a>
                        
                    </div>
                </div>
            </li>
             @endif
            <li class="nav-item @if(Request::segment(2)=='mesajkutusu') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo6"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Mesaj Kutusu</span>
                </a>
                <div id="collapseTwo6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{route('admin.mesajkutusu')}}">Tümü</a>
                        <a class="collapse-item" href="{{route('admin.mesajkutusu.okunan')}}">Okunan</a>
                        <a class="collapse-item" href="{{route('admin.mesajkutusu.arsiv')}}">Arşivlenen</a>
                    </div>
                </div>
            </li>
            <li class="nav-item @if(Request::segment(2)=='ayarlar') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Hizmetlerimiz</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{route('admin.hizmetlerimiz')}}">Liste</a>
                        <a class="collapse-item" href="{{route('admin.hizmetlerimiz.ekle')}}">Ekle</a>
                    </div>
                </div>
            </li>
            <li class="nav-item @if(Request::segment(2)=='markalar') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Markalar</span>
                </a>
                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{route('admin.markalar')}}">Liste</a>
                        <a class="collapse-item" href="{{route('admin.markalar.ekle')}}">Ekle</a>
                    </div>
                </div>
            </li>
            <li class="nav-item @if(Request::segment(2)=='yorumlar') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo3"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Yorumlar</span>
                </a>
                <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{route('admin.yorumlar')}}">Liste</a>
                        <a class="collapse-item" href="{{route('admin.yorumlar.ekle')}}">Ekle</a>
                    </div>
                </div>
            </li>
            <li class="nav-item @if(Request::segment(2)=='takim') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo4"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Takım</span>
                </a>
                <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{route('admin.takim')}}">Liste</a>
                        <a class="collapse-item" href="{{route('admin.takim.ekle')}}">Ekle</a>
                    </div>
                </div>
            </li>
            <li class="nav-item @if(Request::segment(2)=='sss') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo5"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Sıkça Sorulan Sorular</span>
                </a>
                <div id="collapseTwo5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{route('admin.sss')}}">Liste</a>
                        <a class="collapse-item" href="{{route('admin.sss.ekle')}}">Ekle</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
           

            <!-- Heading -->
           
            <!-- Nav Item - Pages Collapse Menu -->
           

            <!-- Nav Item - Utilities Collapse Menu -->
          
           

            <!-- Heading -->
            

            <!-- Sidebar Toggler (Sidebar) -->
           

            <!-- Sidebar Message -->
           

        </ul>
                <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h1>Laravel</h1>    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                                                
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('back/')}}/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('profilim',Auth::user()->id)}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profilim
                                </a>
                                
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('admin.logout')}}"  >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Çıkış
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>