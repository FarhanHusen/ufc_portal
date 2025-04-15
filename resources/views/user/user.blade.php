<!-- resources/views/layouts/layout.blade.php -->
{{-- bukan tampilan apapun --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Football Academy')</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('slick-slider/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('slick-slider/slick-theme.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/media-query.css') }}" />

  </head>

  <body>
    <header class="header">
      <div class="humburger">
        <i class="fas fa-bars fa-2x"></i>
      </div>
      <div class="logo logo2">
        <a href="#">
          <img
            class="logo-main"
            src="{{ asset('page-imgs/white_races_logo_02.png') }}"
            alt="logo image"
          />
        </a>
      </div>
      <div class="main-menu">
        <div class="logo logo3 d-md-block d-lg-none">
          <a href="#">
            <img src="{{ asset('page-imgs/white_races_logo_02.png') }}" alt="logo image" />
          </a>

          <div class="nav-closebtn">
            <div class="line1 lines"></div>
            <div class="line2 lines"></div>
          </div>
        </div>
        <nav class="nav-bar1">
          <ul>
            <li class="nav-items">
                <a href="{{ url('/user') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-items dropdown">
              <a href="#" class="nav-link">About Us</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('#') }}">PELATIH MFP</a></li>
                <li><a class="dropdown-item" href="{{ url('#') }}">PEMAIN MFP</a></li>
                <li><a class="dropdown-item" href="#">SPONSORSHIP</a></li>
              </ul>
            </li>
            <li class="nav-items dropdown">
              <a href="#" class="nav-link">GALERY</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/1PBHskjvjncRvj2p7L9qHSHl0vveDxKVq" target="_blank">MFP U-8</a></li>
                <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/13c_tfzzMdbef63GG7S0O-TIl3cyW_zWH" target="_blank">MFP U-10</a></li>
                <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/1EoiknH4xQHMNZZ_N-ubczkr612e-4plG" target="_blank">MFP U-12</a></li>
                <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/1n8OsKSTdJA-CBMOaD0-mB24HFS7lmpns" target="_blank">MFP U-14</a></li>
                <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/1PRf18CAQdWDXQvs09HU5YPAM68-T9Aqx" target="_blank">MFP U-16</a></li>
              </ul>
            </li>
          </ul>
        </nav>

        <div class="logo logo1">
          <a href="#">
            <img class="logo-main" src="{{ asset('page-imgs/white_races_logo_02.png') }}" alt="logo image" />
          </a>
        </div>

        <nav class="nav-bar2">
          <ul>
            <li class="nav-items dropdown">
              <a href="#" class="nav-link">Player Performance</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/individual') }}">Individual Player Stats</a></li>
                <li><a class="dropdown-item" href="{{ url('/healthy') }}">Health & Physiotherapy</a></li>
              </ul>
            </li>
            <li class="nav-items dropdown">
              <a href="#" class="nav-link">REGISTRASI ACADEMY</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://bit.ly/MFPAcademy2024" target="_blank">Daftar Sekarang</a></li>
              </ul>
            </li>
            <li class="nav-items dropdown">
              <details>
                <summary class="nav-link">Contact</summary>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://wa.me/6289518788383" target="_blank">Admin WhatsApp MFP</a></li>
                </ul>
              </details>
            </li>
          </ul>
        </nav>

        <div class="social-links d-flex me-4 justify-content-center align-items-center">
          <a class="nav-link" href="https://www.youtube.com/channel/UCTFOYGV-nEZHfbIYAAGU-fw" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
          <a class="nav-link" href="https://www.instagram.com/maguwoharjofootball_park?igshid=YWVzeW9sN3RoZm41" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow" style="position: relative;">
            <a class="" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                <img class="img-profile rounded-circle" style="width: 30px; height: 30px;"
                    src="{{ asset('sb-admin/img/undraw_profile.svg') }}" alt="Profile Image">
            </a>
        </li>
          <!-- Nav Item - Logout Icon -->
          <li class="nav-item no-arrow mx-1" style="position: relative; top: -10px;">
            <a class="nav-link" href="{{ route('logout') }}" title="Logout">
                <i class="fas fa-sign-out-alt"></i> <!-- Ikon logout -->
            </a>
        </li>
        </div>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- Content Section -->
    <main>
        
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
                            <a href="{{ url('#') }}" class="btn-main main-btn-2">Jadwal Latihan</a>
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
        <section class="principles" >
            <div class="principle-headline pt-5">
                <span class="text-uppercase">MFP ACADEMY</span>
                <h3 class="text-uppercase">
                    NE<span class="span-color fw-bolder">WS </span>
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
                <div class="col-lg-3 col-md-6 card" data-aos-delay="50">
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
                <div class="col-lg-3 col-md-6 card" data-aos-delay="200">
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
                <div class="col-lg-3 col-md-6 card" data-aos-delay="300">
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
                <div class="col-lg-3 col-md-6 card" data-aos-delay="400">
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
        <section class="our-players" data-aos="">
            <div class="player-slide-parent">
                <div class="players-headline">
                    <h3 class="text-uppercase"><b class="fw-bolder"></b></h3>
                    <p></p>
                </div>
        </section>
        <!-- description cards -->
        <div class="desc-cards">
            <div class="container row">
                <div class="card col-lg-3 col-md-12" data-aos-delay="50">
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
                <div class="card col-lg-3 col-md-12 card-dark0" data-aos-delay="300">
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
                <div class="card col-lg-3 col-md-12 card-dark1" data-aos-delay="400">
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
                <div class="card col-lg-3 col-md-12 card-dark2" data-aos-delay="600">
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
        <!-- main -->



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

    <!-- Footer Section -->
    @include('layouts.footer')
  
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  </body>
</html>