<!-- resources/views/home.blade.php -->
@extends('layouts.layout')

@section('title', 'MFP ACADEMY')
@section('content')

    <!-- main -->
    <main>
        <!-- modal form -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header d-md-block">
                        <div class="modal-close mb-4">
                            <!-- modal close button -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- tabs -->
                        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                            <li class="nav-item me-2" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">
                                    Log In
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <!-- log in form -->
                                <form method="POST" action="{{ route('login') }}" class="log-form">
                                    @csrf <!-- CSRF token untuk keamanan -->

                                    <div class="form-group">
                                        <label for="username">Username or Email</label>
                                        <input type="text" name="email" id="username" class="form-control"
                                            placeholder="Enter your Username or Email" value="{{ old('email') }}" />
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Enter your password" />
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="submit custom-btn btn-3">
                                        <span>Log In</span>
                                    </button>
                                </form>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="header-2">
            <div class="inner-header mb-5">
                <div class="sub-headline">
                    <span>Welcome to</span>
                </div>
                <h1 class="head-line">
                    <strong class="highlight">MFP</strong>
                    <span class="normal">ACADEMY</span>
                </h1>
            </div>

            <!-- Slider Area -->
            <div class="slider">
                <!-- Gambar 1 -->
                <div class="slide">
                    <img src="/page-imgs/header.jpg" alt="Header Image 1">
                </div>
                <!-- Gambar 2 -->
                <div class="slide">
                    <img src="/page-imgs/lapangan.jpg" alt="Header Image 2">
                </div>
                <!-- Gambar 3 -->
                <div class="slide">
                    <img src="/page-imgs/our-players.jpg" alt="Header Image 3">
                </div>
            </div>

            <!-- Optional Navigation Buttons -->
            <div class="slider-navigation">
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
        </header>


        <!-- score cards -->
        <div class="score-card-wrapper container-fluid px-5">
            <div class="card">
                <div class="card-body">
                    <div class="img-score">
                        <img src="{{ asset('page-imgs/white_races_logo_02.png') }}" alt="rece-logo" />
                        <h6>MFP U-14</h6>
                    </div>
                    <div class="score-count">
                        <span class="score-num" data-target="5">2</span>
                        <span class="score-num" data-target="7">0</span>
                    </div>
                    <div class="img-score">
                        <img src="{{ asset('page-imgs/white_races_logo_02.png') }}" alt="rece-logo" />
                        <h6>MFP U-16</h6>
                    </div>
                </div>
                <div class="btn-details text-center">
                    <a href="#" class="btn-main">Hasil score</a>
                </div>
            </div>
            <!-- score cards 2 -->
            <div class="card">
                <div class="card-body">
                    <div class="img-score">
                        <img src="{{ asset('page-imgs/white_races_logo_02.png') }}" alt="rece-logo" />
                        <h6>MFP U-20</h6>
                    </div>
                    <div class="score-count">
                        <span class="score-num" data-target="3">3</span>
                        <span class="score-num" data-target="8">1</span>
                    </div>
                    <div class="img-score">
                        <img src="{{ asset('page-imgs/white_races_logo_02.png') }}" alt="rece-logo" />
                        <h6>MFP U-18</h6>
                    </div>
                </div>
                <div class="details-btn text-center">
                    <a href="#" class="btn-main">Hasil Score</a>
                </div>
            </div>
        </div>
        <!-- club section -->
        <section class="club-sect" data-aos="">
            <div class="club-sect-inner">
                <div class="row">
                    <div class="club-desc col-lg-6 col-md-12">
                        <span class="fs-3 text-uppercase"> From the club </span>
                        <h2 class="club-headline">
                            Maguwoharjo FootBall Academy
                            <span class="span-color fw-bolder">Timetable</span>
                        </h2>
                        <p class="club-sub-headline">
                            "Maguwoharjo Football Park adalah fasilitas olahraga modern yang menyediakan lapangan sepak bola
                            berkualitas tinggi untuk berbagai usia dan tingkat keterampilan. Tempat ini dirancang untuk
                            mendukung perkembangan atlet muda dan komunitas olahraga."
                        </p>

                        <p class="mb-4">

                        </p>

                        <div class="club-btns mb-4">
                            <a href="#location-map" class="btn-main mb-3">our location</a>
                            <a href="{{ url('/jadwal_latihan') }}" class="btn-main main-btn-2">Jadwal Latihan</a>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--/ club section -->

        <!-- About oxygen section -->
        <section class="about" data-aos="">
            <div class="inner-about row">
                <div class="about-headline col-lg-6 col-md-12">
                    <span class="text-uppercase">learn more</span>
                    <h3 class="about-headTxt">
                        About <strong class="span-color fw-bolder">MFP ACADEMY</strong>
                    </h3>
                    <p class="about-sub-heading">
                        Academy ini memberi anak-anak kesempatan untuk belajar dan mengembangkan keterampilan Sepak Bola.
                    </p>

                    <p style="font-size: 13px; line-height: 2">
                        MFP Academy mengadopsi pendekatan dinamis untuk meningkatkan kualitas pelatihan sepak bola melalui
                        kolaborasi dan inovasi. Akademi ini secara organik mendorong keberagaman dan pemberdayaan, baik bagi
                        pemain, pelatih, maupun staf, guna menciptakan lingkungan yang mendukung pertumbuhan dan kreativitas
                        dalam dunia sepak bola.
                    </p>
                    <p style="font-size: 13px; margin-bottom: 2rem; line-height: 2">
                        Seiring perkembangan teknologi, MFP Academy mengintegrasikan solusi berbasis cloud untuk memproses
                        data performa pemain secara real-time. Strategi ini tidak hanya menciptakan interaksi yang lebih
                        kaya, tetapi juga memperkuat kemampuan akademi dalam merancang pelatihan yang efisien dan relevan
                        dengan kebutuhan era modern.
                    </p>

                    <div class="about-btns">
                        <a href="https://bit.ly/MFPAcademy2024" target="_blank" class="btn-main mb-2 me-2">Join the
                            Academy</a>
                        <a href="#" class="btn-main main-btn-2">Learn more</a>
                    </div>
                </div>
                <div class="about-hero-img col-lg-6 col-md-12">
                    <img src="{{ asset('page-imgs/jadwal.jpg') }}" alt="about section image" />
                </div>
            </div>
        </section>
        <!-- /about section -->

        <!-- Principles section -->
        <section class="principles" data-aos="">
            <div class="principle-headline pt-5">
                <span class="text-uppercase">MFP ACADEMY</span>
                <h3 class="text-uppercase">
                    NE <span class="span-color fw-bolder">WS </span>
                </h3>
                <p>
                    Kualitas: Menyediakan fasilitas dan layanan terbaik untuk pengalaman olahraga optimal.
                    Inklusivitas: Terbuka untuk semua, tanpa memandang usia atau kemampuan.
                    Komunitas: Membangun hubungan yang kuat dengan masyarakat melalui program dan acara.
                    Sportivitas: Menjunjung tinggi nilai etika dan fair play dalam setiap kegiatan.
                    Keamanan: Memprioritaskan keselamatan dan kesehatan semua pengguna.
                </p>
            </div>
            <div class="principles-cards row pb-5">
                <div class="col-lg-3 col-md-6 card" data-aos="fade-up" data-aos-delay="50">
                    <div class="pinciple-symbol">
                        <span class="btn-main bt-main-2 cards-symbols"><i class="fas fa-calculator"></i></span>
                    </div>
                    <h4>Team work</h4>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla
                            iure consectetur tatibus eos accusantium!
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 card" data-aos="fade-up" data-aos-delay="200">
                    <div class="pinciple-symbol">
                        <span class="btn-main bt-main-2 cards-symbols"><i class="fas fa-futbol"></i></span>
                    </div>
                    <h4>Membership</h4>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla
                            iure consectetur tatibus eos accusantium!
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 card" data-aos="fade-up" data-aos-delay="300">
                    <div class="pinciple-symbol">
                        <span class="btn-main bt-main-2 cards-symbols"><i class="far fa-hand-rock"></i></span>
                    </div>
                    <h4>Encourage</h4>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla
                            iure consectetur tatibus eos accusantium!
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 card" data-aos="fade-up" data-aos-delay="400">
                    <div class="pinciple-symbol">
                        <span class="btn-main bt-main-2 cards-symbols"><i class="fas fa-basketball-ball"></i></span>
                    </div>
                    <h4>sportship</h4>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla
                            iure consectetur tatibus eos accusantium!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Principles section -->

        <!-- our players section -->
        <section class="our-players">
            <div class="player-slide-parent">
                <div class="players-headline">
                    <h3 class="text-uppercase"><b class="fw-bolder"></b></h3>
                    <p></p>
                </div>
        </section>
        <!-- description cards -->
        <div class="desc-cards">
            <div class="container row">
                <div class="card col-lg-3 col-md-12" data-aos="fade-up" data-aos-delay="50">
                    <div class="card-icon pt-4">
                        <span class="btn-main main-btn-2"><i class="fas fa-volleyball-ball"></i></span>
                    </div>
                    <h3>MFP U-8 <U-8></U-8></h3>
                    <div class="card-body">
                        <p>
                            "Setiap latihan adalah kesempatan untuk belajar. Jangan takut untuk mencoba hal baru dan
                            bertanya!"
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-12 card-dark0" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon pt-4">
                        <span class="btn-main main-btn-2"><i class="fas fa-volleyball-ball"></i></span>
                    </div>
                    <h3>MFP U-10</h3>
                    <div class="card-body">
                        <p>
                            "Setiap pemain hebat memulai dari sini. Jika kamu berlatih keras, impianmu untuk menjadi pemain
                            profesional bisa tercapai!"
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-12 card-dark1" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-icon pt-4">
                        <span class="btn-main main-btn-2"><i class="fas fa-volleyball-ball"></i></span>
                    </div>
                    <h3>MFP U-12</h3>
                    <div class="card-body">
                        <p>
                            "Ingat, sepak bola adalah tentang bersenang-senang! Nikmati setiap momen di lapangan."
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-12 card-dark2" data-aos="fade-up" data-aos-delay="600">
                    <div class="card-icon pt-4">
                        <span class="btn-main main-btn-2"><i class="fas fa-volleyball-ball"></i></span>
                    </div>
                    <h3>MFP U-14</U-12></h3>
                    <div class="card-body">
                        <p>
                            "Sepak bola adalah permainan tim. Ayo saling mendukung dan bantu teman-temanmu di lapangan."
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /our players section -->

    </main>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!-- Slick Slider JS -->
    <script src="{{ asset('slick-slider/slick.min.js') }}"></script>
    <!-- AOS Scroll Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Axios JS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        // Inisialisasi AOS
        AOS.init();
    </script>
    <!-- Script JavaScript di bawah -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slider .slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            const slideContainer = document.querySelector('.slider');
            slideContainer.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }

        // Otomatis berganti slide setiap 3 detik
        setInterval(nextSlide, 3000);

        // Event listener untuk tombol navigasi
        document.querySelector('.slider-navigation .next').addEventListener('click', nextSlide);
        document.querySelector('.slider-navigation .prev').addEventListener('click', prevSlide);
    </script>

    </body>

    </html>
@endsection
