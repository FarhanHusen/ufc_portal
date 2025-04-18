@extends('layouts.layout')

@section('title', 'Pemain MFP')

@section('content')
<style>
    .hero-section {
      position: relative;
      background-color: #2c3e50; /* Fallback color */
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 0;
      overflow: hidden;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.8));
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      color: white;
      text-align: center;
      padding: 20px;
    }

    .hero-content h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .hero-content p {
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }
    
    .team-section {
      background-color: #f8f9fa;
      padding: 80px 0;
      margin-top: 0;
    }
    
    .section-header {
      margin-bottom: 60px;
    }
    
    .section-header h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #2c3e50;
      margin-bottom: 20px;
    }
    
    .section-header p {
      color: #666;
      font-size: 1.1rem;
      max-width: 700px;
      margin: 0 auto;
    }
    
    .team-member {
      background: white;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      margin-bottom: 30px;
    }
    
    .team-member:hover {
      transform: translateY(-5px);
    }
    
    .team-member img {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border: 5px solid #fff;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .team-member h5 {
      font-size: 1.25rem;
      font-weight: 600;
      color: #2c3e50;
    }
    
    .team-member .text-muted {
      color: #e74c3c !important;
      font-weight: 500;
      margin-bottom: 15px;
    }
    
    .team-member p {
      color: #666;
      font-size: 0.95rem;
      line-height: 1.6;
      padding: 0 15px;
    }

    .social-links a:hover {
      background: #1431b3;
      color: white !important;
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1>Pemain MFP</h1>
        <p>Para pemain yang akan membawa MFP ke puncak prestasi sepakbola</p>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>Meet Our Players</h2>
            <p>Pemain berbakat yang siap berjuang untuk meraih kemenangan bersama MFP</p>
        </div>
        
        <div class="row">
            <!-- Player 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center p-4">
                    <img src="{{ asset('page-imgs/player1.jpg') }}" class="rounded-circle mb-4" alt="Player 1" onerror="this.src='https://via.placeholder.com/180'">
                    <h5 class="mb-1">Nama Pemain 1</h5>
                    <p class="text-muted">Striker</p>
                </div>
            </div>

            <!-- Player 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center p-4">
                    <img src="{{ asset('page-imgs/player2.jpg') }}" class="rounded-circle mb-4" alt="Player 2" onerror="this.src='https://via.placeholder.com/180'">
                    <h5 class="mb-1">Nama Pemain 2</h5>
                    <p class="text-muted">Midfielder</p>
                </div>
            </div>

            <!-- Player 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center p-4">
                    <img src="{{ asset('page-imgs/player3.jpg') }}" class="rounded-circle mb-4" alt="Player 3" onerror="this.src='https://via.placeholder.com/180'">
                    <h5 class="mb-1">Nama Pemain 3</h5>
                    <p class="text-muted">Goalkeeper</p>
                </div>
            </div>

            <!-- Player 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center p-4">
                    <img src="{{ asset('page-imgs/player1.jpg') }}" class="rounded-circle mb-4" alt="Player 1" onerror="this.src='https://via.placeholder.com/180'">
                    <h5 class="mb-1">Nama Pemain 4</h5>
                    <p class="text-muted">Defender</p>
                </div>
            </div>

            <!-- Player 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center p-4">
                    <img src="{{ asset('page-imgs/player2.jpg') }}" class="rounded-circle mb-4" alt="Player 2" onerror="this.src='https://via.placeholder.com/180'">
                    <h5 class="mb-1">Nama Pemain 5</h5>
                    <p class="text-muted">Midfielder</p>
                </div>
            </div>

            <!-- Player 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center p-4">
                    <img src="{{ asset('page-imgs/player3.jpg') }}" class="rounded-circle mb-4" alt="Player 3" onerror="this.src='https://via.placeholder.com/180'">
                    <h5 class="mb-1">Nama Pemain 6</h5>
                    <p class="text-muted">Striker</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
