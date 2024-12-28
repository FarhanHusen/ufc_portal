<!-- resources/views/layouts/layout.blade.php -->
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
                <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-items dropdown">
              <a href="#" class="nav-link">About Us</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/pelatih') }}">PELATIH MFP</a></li>
                <li><a class="dropdown-item" href="{{ url('/pemain') }}">PEMAIN MFP</a></li>
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
            {{-- <li class="nav-items dropdown">
              <a href="#" class="nav-link">Player Performance</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Individual Player Stats</a></li>
                <li><a class="dropdown-item" href="#">Health & Physiotherapy</a></li>
              </ul>
            </li> --}}
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
          <a href="#" class="user-login nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user"></i></a>
          <a class="nav-link" href="./serach-items/serach.html" title="Click to Search"><i class="fas fa-search"></i></a>
          <a class="nav-link" href="https://www.youtube.com/channel/UCTFOYGV-nEZHfbIYAAGU-fw" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
          <a class="nav-link" href="https://www.instagram.com/maguwoharjofootball_park?igshid=YWVzeW9sN3RoZm41" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- Content Section -->
    <main>
      @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer')
  
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  </body>
</html>
