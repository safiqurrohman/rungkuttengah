<div>
    @livewire('pages.Headerproduk')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <nav class="breadcrumbs">
                <ol>
                    <!-- {{ route('umkm') }} -->
                    <li><a href="{{route('homekelurahan')}}">Kelurahan</a></li>
                    <li class="current">Produk UMKM</li>
                </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <section id="campus-facilities" class="campus-facilities section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Hero Introduction Row -->
                <div class="hero-intro">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                        <div class="content-wrapper">
                            <div class="badge-highlight">Rungkut Tengah</div>
                            <h1>UMKM unggul  dan mandiri</h1>
                            <p class="lead-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; sed viverra mattis dui vel bibendum. Mauris vitae nunc eget lorem consectetur vehicula.</p>
                            <div class="feature-highlights">
                            <div class="highlight-item">
                                <i class="bi bi-geo-alt"></i>
                                <div>
                                <span class="number">9</span>
                                <span class="label">RW</span>
                                </div>
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-people"></i>
                                <div>
                                <span class="number">30</span>
                                <span class="label">UMKM</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                        <div class="hero-visual">
                            <div class="image-stack">
                            <img src="{{ asset('assets/img/kelurahan/herokelurahan.jpeg')}}" alt="Campus View" class="img-fluid primary-img">
                            <div class="floating-card">
                                <i class="bi bi-mortarboard"></i>
                                <span>Rungkut Tengah</span>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>



                <!-- Campus Highlights Carousel -->
                <div class="highlights-carousel" data-aos="fade-up" data-aos-delay="200">
                    <div class="section-header">
                        <h2>Produk UMKM Rungkut Tengah</h2>
                        <p>Donec rutrum congue leo eget malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                    <!-- Start Srach Section -->
                    <div id="faculty--staff" class="faculty--staff section">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">

                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="faculty-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search faculty by name, department or research area...">
                                        <button class="search-btn" type="button">
                                        <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                    <div class="search-filters mt-3 d-flex flex-wrap">
                                        <div class="filter-item active">All</div>
                                        <div class="filter-item">Kuliner</div>
                                        <div class="filter-item">Kerajinan</div>
                                        <div class="filter-item">Jasa</div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /end Search Section -->
                    <div class="campus-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 800,
                            "autoplay": {
                            "delay": 4000
                            },
                            "slidesPerView": 1,
                            "spaceBetween": 30,
                            "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                            },
                            "breakpoints": {
                            "768": {
                                "slidesPerView": 2
                            },
                            "1024": {
                                "slidesPerView": 3
                            }
                            }
                        }
                        </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="highlight-card">
                                    <div class="card-image">
                                        <img src="assets/img/education/campus-10.webp" alt="Central Library" class="img-fluid" loading="lazy">
                                        <div class="image-overlay">
                                        <span class="category-tag">Kuliner</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4>Jajanan Ibu ali</h4>
                                        <p>Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <div class="card-stats">                                     
                                            <a href="{{route('katalog')}}" class="cursor-pointer">
                                                <span>Lihat Detail</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="swiper-slide">
                                <div class="highlight-card">
                                    <div class="card-image">
                                        <img src="assets/img/education/campus-10.webp" alt="Central Library" class="img-fluid" loading="lazy">
                                        <div class="image-overlay">
                                        <span class="category-tag">Kuliner</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4>Jajanan Ibu ali 1</h4>
                                        <p>Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <div class="card-stats">                                     
                                            <a href="{{route('katalog')}}" class="cursor-pointer">
                                                <span>Lihat Detail</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="swiper-slide">
                                <div class="highlight-card">
                                    <div class="card-image">
                                        <img src="assets/img/education/campus-10.webp" alt="Central Library" class="img-fluid" loading="lazy">
                                        <div class="image-overlay">
                                        <span class="category-tag">Kuliner</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4>Jajanan Ibu ali</h4>
                                        <p>Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <div class="card-stats">                                     
                                            <a href="{{route('katalog')}}" class="cursor-pointer">
                                                <span>Lihat Detail</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="swiper-slide">
                                <div class="highlight-card">
                                    <div class="card-image">
                                        <img src="assets/img/education/campus-10.webp" alt="Central Library" class="img-fluid" loading="lazy">
                                        <div class="image-overlay">
                                        <span class="category-tag">Kuliner</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4>Jajanan Ibu ali</h4>
                                        <p>Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <div class="card-stats">                                     
                                            <a href="{{route('katalog')}}" class="cursor-pointer">
                                                <span>Lihat Detail</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>

            </div>

        </section>
        <!-- /Campus Facilities Section -->


    </main>
    @livewire('pages.footer')
</div>
