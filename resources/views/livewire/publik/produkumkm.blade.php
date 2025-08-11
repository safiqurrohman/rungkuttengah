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

        <section id="campus-facilities" class="campus-facilities section ">
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
                                <span class="number">{{ $totalUmkm}}</span>
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
            </div>

        </section>
        <!-- /Campus Facilities Section -->
        <!-- Faculty  Staff Section -->
        <section id="faculty--staff" class="faculty--staff section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Search Data Produk  -->
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto ">
                        <div class="faculty-search">
                            <div class="input-group">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="Search faculty by name, department or research area..." 
                                    wire:model.debounce.500ms="search"
                                >
                                <button class="search-btn" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                            <div class="search-filters mt-3 d-flex flex-wrap">
                                <div class="filter-item {{ $kategori === 'Semua' ? 'active' : '' }}" wire:click="setKategori('Semua')">Semua</div>
                                <div class="filter-item {{ $kategori === 'Makanan' ? 'active' : '' }}" wire:click="setKategori('Makanan')">Makanan</div>
                                <div class="filter-item {{ $kategori === 'Minuman' ? 'active' : '' }}" wire:click="setKategori('Minuman')">Minuman</div>
                                <div class="filter-item {{ $kategori === 'Kerajinan' ? 'active' : '' }}" wire:click="setKategori('Kerajinan')">Kerajinan</div>
                                <div class="filter-item {{ $kategori === 'Aksesoris' ? 'active' : '' }}" wire:click="setKategori('Aksesoris')">Aksesoris</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk List -->
                <div class="faculty-grid">
                    <div class="row g-4">
                        @forelse($produk as $umkm)
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="faculty-card">
                                    <div class="faculty-image">
                                        <img src="{{asset('assets/img/'.($umkm->foto ?? 'umkm/default.jpeg'))}}" class="img-fluid" alt="Foto UMKM">
                                        <div class="social-links">
                                            @if($umkm->ig)
                                                <a href="https://instagram.com/{{ ltrim($umkm->ig, '@') }}" target="_blank"><i class="bi bi-instagram"></i></a>
                                            @endif

                                            @if($umkm->wa)
                                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $umkm->wa) }}" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="faculty-info">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3>{{$umkm->nama_umkm}}</h3>
                                            <p class="bg-success px-1 text-white" style="border-radius: 5px;">{{$umkm->status}}</p>
                                        </div>
                                        <p class="position">{{'Pemilik: '.$umkm->pemilik}}</p>
                                        <div class="department">Alamat: {{$umkm->alamat}}</div>
                                        <div class="department">Kategori: {{$umkm->kategori->nama_kategori}}</div>
                                        <a href="{{route('katalog', $umkm->id)}}" class="profile-link">Kunjungin</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center my-5">
                                @if ($search)
                                    <p class="text-muted">Tidak ada menu yang cocok dengan pencarian.</p>
                                @elseif ($kategori && $kategori !== 'Semua')
                                    <p class="text-muted">Tidak ada produk di kategori <strong>{{ $kategori }}</strong>.</p>
                                @else
                                    <p class="text-muted">Belum ada produk tersedia.</p>
                                @endif
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="pagination-container mt-5 d-flex justify-content-center" data-aos="fade-up">
                    <nav aria-label="Faculty pagination">
                        <ul class="pagination">

                            {{-- Tombol Previous --}}
                            <li class="page-item {{ $produk->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" 
                                wire:click="previousPage" 
                                wire:loading.attr="disabled" 
                                aria-label="Previous" 
                                style="cursor: pointer;">
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>

                            {{-- Halaman --}}
                            @php
                                $start = max($produk->currentPage() - 1, 1);
                                $end = min($produk->currentPage() + 1, $produk->lastPage());
                            @endphp

                            @for ($page = $start; $page <= $end; $page++)
                                <li class="page-item {{ $page == $produk->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" 
                                    wire:click="gotoPage({{ $page }})" 
                                    style="cursor: pointer;">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endfor

                            {{-- Tombol Next --}}
                            <li class="page-item {{ !$produk->hasMorePages() ? 'disabled' : '' }}">
                                <a class="page-link" 
                                wire:click="nextPage" 
                                wire:loading.attr="disabled" 
                                aria-label="Next" 
                                style="cursor: pointer;">
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <!-- <div class="pagination-container mt-5 d-flex justify-content-center" data-aos="fade-up">
                    <nav aria-label="Faculty pagination">
                        <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                            <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                            <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                        </ul>
                    </nav>
                </div> -->
            </div>

        </section>
        <!-- /Faculty  Staff Section -->


    </main>
    @livewire('pages.footer')
</div>
