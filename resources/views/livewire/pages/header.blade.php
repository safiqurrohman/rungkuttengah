
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">
        <div href="#hero" class="logo d-flex align-items-center me-auto">
             
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('assets/img/kelurahan/logosurabaya.png')}}" alt="">
                <p class="text-logo fw-bold">Rungkut-Tengah</p>
            </div>
        </div>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#profile"><span>Profile</span></a></li>
          <!-- <li><a href="#visi">Visi & Misi</a></li> -->
          <li><a href="#struktur">Struktural</a></li>
          <li><a href="#kreatif">Kreatif</a></li>
          <li class="dropdown"><a href="{{ route('kataproduk') }}"><span>Umkm</span></i></a>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>


