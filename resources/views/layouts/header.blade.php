<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    
      <!-- Preloader -->
      {{-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div> --}}
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('klasifikasi.index') }}" class="nav-link">Deteksi Dini</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('klasifikasi.riwayat') }}" class="nav-link">History</a>
          </li>
        </ul>
    
        
      </nav>
      <!-- /.navbar -->