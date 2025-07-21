<div>
@livewire('pages.header')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="hero-wrapper"
                style="position: relative; overflow: hidden; padding: 0px; width: 100%;
                        background-image: url('{{ asset('assets/img/kelurahan/herokelurahan.jpeg') }}');
                        background-repeat: no-repeat; background-size: cover; background-position: center; z-index: 1;">
                
                <div class="container mb-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
                            <h1 style="color: white">Kelurahan Rungkut <span class="color-span">Tengah</span></h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget lacus id tortor facilisis tincidunt. Donec gravida risus at sollicitudin luctus.</p>
                            <div class="stats-row mt-4">
                                <div class="stat-item">
                                <span class="stat-number text-white">35</span>
                                <span class="stat-label text-white fw-bold">UMKM</span>
                                </div>
                                <div class="stat-item">
                                <span class="stat-number text-white">9</span>
                                <span class="stat-label  text-white fw-bold">RW</span>
                                </div>
                            </div>
                            <div class="action-buttons">
                            <a href="#" class="btn-primary">Jelajahi umkm</a>
                            <a href="#" class="btn-secondary">video</a>
                        </div>
                        </div>
                        <div class="col-lg-6 hero-media" data-aos="zoom-in" data-aos-delay="200">
                        <!-- <img src="{{ asset('assets/img/kelurahan/herokelurahan.jpeg')}}" alt="Education" class="img-fluid main-image"> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-cards-wrapper" data-aos="fade-up" data-aos-delay="300">
                <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                        <i class="bi bi-book-fill"></i>
                        </div>
                        <div class="feature-content">
                        <h3>UMKM Unggul</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget lacus id tortor facilisis.</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card active">
                        <div class="feature-icon">
                        <i class="bi bi-laptop-fill"></i>
                        </div>
                        <div class="feature-content">
                        <h3>Kelurahan Modern</h3>
                        <p>Donec gravida risus at sollicitudin luctus. Nullam feugiat odio vitae justo pharetra.</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                        <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="feature-content">
                        <h3>Gotong Royong</h3>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="upcoming-event" data-aos="fade-up" data-aos-delay="400">
                <div class="container">
                <div class="event-content">
                    <div class="event-date">
                    <span class="day">15</span>
                    <span class="month">NOV</span>
                    </div>
                    <div class="event-info">
                    <h3>Selamat Datang Di Kelurangan Umkm Kreatif</h3>
                    <p>Jelajahi produk warga rungkut tengah yang memiliki keunikan dan kenikmatan yang berbeda.</p>
                    </div>
                </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="profile" class="profile section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Profile Kelurahan</h3>
                    <h2>Sejarah Kelurahan Rungkut Tengah</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae odio ac nisi tristique venenatis. Nullam feugiat ipsum vitae justo finibus, in sagittis dolor malesuada. Aenean vel fringilla est, a vulputate massa.</p>

                    <div class="timeline">
                        <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h4>1965</h4>
                            <p>Etiam at tincidunt arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                        </div>

                        <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h4>1982</h4>
                            <p>Donec dignissim, odio ac imperdiet luctus, ante nisl accumsan justo, nec tempus augue mi in nulla.</p>
                        </div>
                        </div>

                        <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h4>1998</h4>
                            <p>Suspendisse potenti. Nullam lacinia dictum auctor. Phasellus euismod sem at dui imperdiet, ac tincidunt mi placerat.</p>
                        </div>
                        </div>

                        <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h4>2010</h4>
                            <p>Vestibulum ultrices magna ut faucibus sollicitudin. Sed eget venenatis enim, nec imperdiet ex.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('assets/img/kelurahan/herokelurahan.jpeg')}}" alt="Halaman Kelurahan" class="img-fluid rounded">

                    <div class="mission-vision" data-aos="fade-up" data-aos-delay="400">
                        <div class="mission">
                        <h3>Visi</h3>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                        </div>

                        <div class="vision">
                        <h3>Misi</h3>
                        <p>Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>



            </div>
        </section><!-- /About Section -->

        <!-- start struktural kelurahan  -->
        <section id="struktur" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Struktural Kelurahan</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, optio.</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row mt-1">
                    <div class="col-lg-12">
                        <div class="core-values" data-aos="fade-up" data-aos-delay="500">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                <div class="col">
                                <div class="value-card">
                                    <div class="value-icon">
                                    <i class="bi bi-book"></i>
                                    </div>
                                    <h4>Academic Excellence</h4>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                                </div>
                                </div>

                                <div class="col">
                                <div class="value-card">
                                    <div class="value-icon">
                                    <i class="bi bi-people"></i>
                                    </div>
                                    <h4>Community Engagement</h4>
                                    <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                                </div>
                                </div>

                                <div class="col">
                                <div class="value-card">
                                    <div class="value-icon">
                                    <i class="bi bi-lightbulb"></i>
                                    </div>
                                    <h4>Innovation</h4>
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                                </div>
                                </div>

                                <div class="col">
                                <div class="value-card">
                                    <div class="value-icon">
                                    <i class="bi bi-globe"></i>
                                    </div>
                                    <h4>Global Perspective</h4>
                                    <p>Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end struktural kelurahan  -->

        <!-- Students Life Block Section -->
        <section id="history" class="students-life-block section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Keseruan Kegiatan</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                    <div class="hero-image-wrapper">
                    <img src="{{ asset('assets/img/education/students-7.webp')}}" alt="Student Life" class="img-fluid main-image">
                    
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                    <div class="content-wrapper">
                    <div class="section-badge" data-aos="fade-up" data-aos-delay="350">
                        <span>Student Life</span>
                    </div>
                    <h2 data-aos="fade-up" data-aos-delay="400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse at libero corrupti nulla minima quae.</h2>
                    <p class="lead-text" data-aos="fade-up" data-aos-delay="450">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>

                    <div class="info-grid" data-aos="fade-up" data-aos-delay="500">
                        <div class="info-item">
                        <div class="info-icon">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div class="info-text">
                            <strong>Year-Round Events</strong>
                            <span>Duis aute irure dolor in reprehenderit voluptate</span>
                        </div>
                        </div>

                        <div class="info-item">
                        <div class="info-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="info-text">
                            <strong>Achievement Programs</strong>
                            <span>Excepteur sint occaecat cupidatat non proident</span>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="activities-showcase">
                <div class="row g-4">
                    <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                    <div class="featured-activity">
                        <div class="activity-media">
                        <img src="{{ asset('assets/img/education/activities-2.webp')}}" alt="Featured Activity" class="img-fluid">
                        <div class="activity-overlay">
                            <div class="overlay-content">
                            <h4>Student Organizations</h4>
                            <p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <a href="#" class="overlay-btn">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                    <div class="activities-list">
                        <div class="activity-item" data-aos="slide-up" data-aos-delay="350">
                        <div class="activity-thumb">
                            <img src="{{ asset('assets/img/education/activities-6.webp')}}" alt="Research Projects" class="img-fluid">
                        </div>
                        <div class="activity-info">
                            <h6>Research Projects</h6>
                            <p>Sed ut perspiciatis unde omnis natus error</p>
                        </div>
                        </div>

                        <div class="activity-item" data-aos="slide-up" data-aos-delay="400">
                        <div class="activity-thumb">
                            <img src="{{ asset('assets/img/education/activities-1.webp')}}" alt="Community Service" class="img-fluid">
                        </div>
                        <div class="activity-info">
                            <h6>Community Service</h6>
                            <p>At vero eos et accusamus et iusto odio</p>
                        </div>
                        </div>

                        <div class="activity-item" data-aos="slide-up" data-aos-delay="450">
                        <div class="activity-thumb">
                            <img src="{{ asset('assets/img/education/activities-4.webp')}}" alt="Innovation Labs" class="img-fluid">
                        </div>
                        <div class="activity-info">
                            <h6>Innovation Labs</h6>
                            <p>Temporibus autem quibusdam officiis debitis</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

            </div>
        </section>
        <!-- /histori Life Block Section -->

        <!-- Recent News Section -->
        <section id="kreatif" class="recent-news section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Produk Umkm</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatibus.</p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="100">
                    <article class="post-item d-flex">
                        <div class="post-img">
                            <img src="{{ asset('assets/img/blog/blog-post-1.webp')}}" alt="" class="img-fluid" loading="lazy">
                        </div>

                        <div class="post-content flex-grow-1">
                            <a href="#" class="category">Nama Produk</a>

                            <h2 class="post-title">
                            <a href="#">Sed ut perspiciatis unde omnis</a>
                            </h2>

                            <p class="post-description">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                            </p>

                            <div class="post-meta">
                            <div class="post-author">
                                <img src="{{ asset('assets/img/person/person-f-12.webp')}}" alt="" class="img-fluid">
                                <span class="author-name">Lina Chen</span>
                            </div>
                            <span class="post-date">Mar 15, 2025</span>
                            </div>
                        </div>
                    </article>
                </div><!-- End post item -->
                
                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="100">
                    <article class="post-item d-flex">
                        <div class="post-img">
                            <img src="{{ asset('assets/img/blog/blog-post-1.webp')}}" alt="" class="img-fluid" loading="lazy">
                        </div>

                        <div class="post-content flex-grow-1">
                            <a href="#" class="category">Nama Produk</a>

                            <h2 class="post-title">
                            <a href="#">Sed ut perspiciatis unde omnis</a>
                            </h2>

                            <p class="post-description">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                            </p>

                            <div class="post-meta">
                            <div class="post-author">
                                <img src="{{ asset('assets/img/person/person-f-12.webp')}}" alt="" class="img-fluid">
                                <span class="author-name">Lina Chen</span>
                            </div>
                            <span class="post-date">Mar 15, 2025</span>
                            </div>
                        </div>
                    </article>
                </div><!-- End post item -->
                
                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="100">
                    <article class="post-item d-flex">
                        <div class="post-img">
                            <img src="{{ asset('assets/img/blog/blog-post-1.webp')}}" alt="" class="img-fluid" loading="lazy">
                        </div>

                        <div class="post-content flex-grow-1">
                            <a href="#" class="category">Nama Produk</a>

                            <h2 class="post-title">
                            <a href="#">Sed ut perspiciatis unde omnis</a>
                            </h2>

                            <p class="post-description">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                            </p>

                            <div class="post-meta">
                            <div class="post-author">
                                <img src="{{ asset('assets/img/person/person-f-12.webp')}}" alt="" class="img-fluid">
                                <span class="author-name">Lina Chen</span>
                            </div>
                            <span class="post-date">Mar 15, 2025</span>
                            </div>
                        </div>
                    </article>
                </div><!-- End post item -->
                
                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="100">
                    <article class="post-item d-flex">
                        <div class="post-img">
                            <img src="{{ asset('assets/img/blog/blog-post-1.webp')}}" alt="" class="img-fluid" loading="lazy">
                        </div>

                        <div class="post-content flex-grow-1">
                            <a href="#" class="category">Nama Produk</a>

                            <h2 class="post-title">
                            <a href="#">Sed ut perspiciatis unde omnis</a>
                            </h2>

                            <p class="post-description">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                            </p>

                            <div class="post-meta">
                            <div class="post-author">
                                <img src="{{ asset('assets/img/person/person-f-12.webp')}}" alt="" class="img-fluid">
                                <span class="author-name">Lina Chen</span>
                            </div>
                            <span class="post-date">Mar 15, 2025</span>
                            </div>
                        </div>
                    </article>
                </div><!-- End post item -->

                

                </div>

            </div>
        </section><!-- /Recent News Section -->
        
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
                        <p>8721 Broadway Avenue, New York, NY 10023</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                        <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-text">
                        <h4>Email</h4>
                        <p>info@examplecompany.com</p>
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

                    <!-- <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
                        <h3>Get in Touch</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</p>

                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                            </div>
                            </div>
                            <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                            </div>
                            <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>

                            <div class="form-submit">
                            <button type="submit">Send Message</button>
                        
                            </div>
                        </form>
                    </div> -->
                </div>
                </div>
            </div>
        </section><!-- /Contact Section -->
    </main>
@livewire('pages.footer')
</div>
