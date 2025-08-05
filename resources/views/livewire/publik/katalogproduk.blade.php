<div>
    @livewire('pages.headerkatalog')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <nav class="breadcrumbs">
            <ol>
                <li><a href="{{route('homekelurahan')}}">Kelurahan</a></li>
                <li><a href="{{route('umkm')}}">Produk</a></li>
                <li class="current">Detail Produk</li>
            </ol>
            </nav>
        </div>
        </div><!-- End Page Title -->

        <!-- Event Section -->
        <section id="event" class="event section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
            <div class="col-lg-12">
                <div class="event-image mb-4" data-aos="fade-up">
                <img src="{{asset('assets/img/kelurahan/kue.jpeg')}}"    style="width: 600px" alt="Event" class="img-fluid rounded">
                </div>

                <div class="event-meta mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-3">
                    <div class="col-md-4">
                    <div class="meta-item">
                        <i class="bi bi-clock"></i>
                        <span>07:00 PM - 16:00 PM</span>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="meta-item">
                        <i class="bi bi-geo-alt"></i>
                        <span>Main Auditorium</span>
                    </div>
                    </div>
                </div>
                </div>

                <div class="event-content" data-aos="fade-up" data-aos-delay="200">
                <h2>Deskripsi Produk</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mauris maximus, finibus dui eget, rhoncus diam. Suspendisse blandit diam at nisi rutrum, non blandit magna molestie. Cras dapibus finibus diam, eu varius purus eleifend eu. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
                </p>
                <p>
                    Donec cursus, sapien vel convallis lobortis, dolor nisl pharetra est, ac facilisis ligula sapien vel justo. Curabitur sed semper risus, non tempus lorem. Nulla sodales feugiat tempus. Cras tincidunt dapibus ante, ut rutrum sapien finibus at. Mauris consequat tellus eu nunc pharetra, eu convallis elit tempor.
                </p>

                <h3 class="mt-4">Daftar Produk</h3>
                <ul class="event-highlights">
                    <li>
                    <i class="bi bi-check-circle"></i>
                    <span>{Interactive student presentations of scientific experiments}</span>
                    </li>
                    <li>
                    <i class="bi bi-check-circle"></i>
                    <span>Produk 1</span>
                    </li>
                    <li>
                    <i class="bi bi-check-circle"></i>
                    <span>Produk 2</span>
                    </li>
                    <li>
                    <i class="bi bi-check-circle"></i>
                    <span>Produk 3</span>
                    </li>
                    <li>
                    <i class="bi bi-check-circle"></i>
                    <span>Produk 4</span>
                    </li>
                </ul>

                <div class="event-gallery mt-5" data-aos="fade-up" data-aos-delay="300">
                    <h3>Galery Produk</h3>
                    <p>Images from previous year's science exhibition:</p>
                    <div class="row g-4 mt-2">
                    <div class="col-md-4">
                        <a href="assets/img/education/events-1.webp" class="glightbox">
                        <img src="{{asset('assets/img/kelurahan/kue.jpeg')}}" alt="Event Gallery" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/education/events-2.webp" class="glightbox">
                        <img src="{{asset('assets/img/kelurahan/kue.jpeg')}}" alt="Event Gallery" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/education/events-3.webp" class="glightbox">
                        <img src="{{asset('assets/img/kelurahan/kue.jpeg')}}" alt="Event Gallery" class="img-fluid rounded">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>

           
            </div>

        </div>

        </section><!-- /Event Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak Kami</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatibus.</p>
            </div>
            <!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-main-wrapper">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15828.735491446796!2d112.75784022857158!3d-7.333236150457143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fad979fa6dbd%3A0xd36f0bf76f9ee765!2sRungkut%20Tengah%2C%20Kec.%20Gn.%20Anyar%2C%20Surabaya%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1753032307619!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="contact-content">
                    <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card">
                        <div class="icon-box">
                        <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-text">
                        <h4>Location</h4>
                        <p>Jl rungkut tengah</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                        <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-text">
                        <h4>Email</h4>
                        <p>produk@gmail.com</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                        <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-text">
                        <h4>Call</h4>
                        <p>+1 (212) 555-7890</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                        <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-text">
                        <h4>Open Hours</h4>
                        <p>Monday-Friday: 9AM - 6PM</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section><!-- /Contact Section -->
    </main>
    @livewire('pages.footer')
</div>
