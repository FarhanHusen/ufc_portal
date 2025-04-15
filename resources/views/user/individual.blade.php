@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Statistics</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #0f1927, #202c43, #2c3e64);
            color: #fff;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        .player-card {
            background: rgb(56, 107, 200);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .player-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid #fff;
            margin-bottom: 20px;
        }

        .player-card h2 {
            font-size: 1.8rem;
            font-weight: 600;
        }

        .stat-card {
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
        }

        .stat-card h3 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 700;
            color: #4e73df;
        }

        .stat-card p {
            margin: 5px 0 0;
            font-size: 1rem;
            color: #ccc;
        }

        .section-title {
            font-size: 1.8rem;
            text-transform: uppercase;
            font-weight: 700;
            color: #4e73df;
            margin-bottom: 15px;
        }

        .table thead {
            background: #ffd700;
            color: #000;
        }

        .table tbody tr:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .icon {
            font-size: 2rem;
            color: #4e73df;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #4e73df;
        }

        .chart-container {
            position: relative;
            height: 250px;
            width: 100%;
            margin-top: 20px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            padding: 15px;
        }

        canvas {
            max-height: 200px;
        }
        .btn-back-to-dashboard {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 14px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .btn-back-to-dashboard:hover {
            background-color: #4e73df; /* Warna lebih gelap saat hover */
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <!-- Player Card -->
            <div class="col-md-4">
                <div class="player-card">
                    <img src="/page-imgs/player2.jpg" alt="Player Photo">
                    <h2>Neymar Jr</h2>
                    <p><strong>Position:</strong> Forward (#10)</p>
                    <p><strong>Team:</strong> Soccer United</p>
                    <div class="row g-2 mt-4">
                        <div class="col-4">
                            <div class="stat-card">
                                <i class="fas fa-birthday-cake icon"></i>
                                <h3>28</h3>
                                <p>Age</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card">
                                <i class="fas fa-ruler-vertical icon"></i>
                                <h3>180</h3>
                                <p>Height (cm)</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card">
                                <i class="fas fa-weight icon"></i>
                                <h3>75</h3>
                                <p>Weight (kg)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Player Statistics -->
            <div class="col-md-8">
                <h2 class="section-title">Season Statistics</h2>
                <div class="row g-3">
                    <div class="col-3">
                        <div class="stat-card">
                            <i class="fas fa-futbol icon"></i>
                            <h3>25</h3>
                            <p>Matches</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="stat-card">
                            <i class="fas fa-bullseye icon"></i>
                            <h3>15</h3>
                            <p>Goals</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="stat-card">
                            <i class="fas fa-hands-helping icon"></i>
                            <h3>8</h3>
                            <p>Assists</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="stat-card">
                            <i class="fas fa-square icon"></i>
                            <h3>5</h3>
                            <p>Yellow Cards</p>
                        </div>
                    </div>
                </div>

                <!-- Chart -->
                <div class="chart-container">
                    <canvas id="playerStatsChart"></canvas>
                </div>

                <div class="mt-4">
                    <h2 class="section-title">Match Performances</h2>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Opponent</th>
                                <th>Goals</th>
                                <th>Assists</th>
                                <th>Minutes Played</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12/12/2024</td>
                                <td>Team A</td>
                                <td>2</td>
                                <td>1</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05/12/2024</td>
                                <td>Team B</td>
                                <td>0</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>28/11/2024</td>
                                <td>Team C</td>
                                <td>1</td>
                                <td>0</td>
                                <td>78</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer">
            &copy; MaguwoharjoFootballPark | Designed with <i class="fas fa-heart"></i> by MFPAcademy2024
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('playerStatsChart').getContext('2d');
        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ['Goals', 'Assists', 'Pass Accuracy', 'Tackles', 'Speed'],
                datasets: [{
                    label: 'Performance Stats',
                    data: [15, 8, 85, 12, 9],
                    backgroundColor: 'rgba(255, 215, 0, 0.2)',
                    borderColor: 'rgba(255, 215, 0, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: '#ffd700',
                }]
            },
            options: {
                responsive: true,
                scales: {
                    r: {
                        angleLines: {
                            color: 'rgba(255, 255, 255, 0.2)'
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.2)'
                        },
                        ticks: {
                            display: false
                        },
                        suggestedMin: 0,
                        suggestedMax: 100
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</body>
</html>
@endsection