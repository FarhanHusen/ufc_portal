@extends('layouts.layout')

@section('title', 'Jadwal Tim MFP')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #2c3e50;">
        Jadwal Latihan Tim MFP
    </h2>
    <div class="row">
        @php
            $tim = [
                'U-8' => [
                    'Senin' => '10.00 - 11.00',
                    'Selasa' => '14.00 - 15.00',
                    'Rabu' => '10.00 - 11.00',
                    'Kamis' => '13.00 - 14.00',
                    'Jumat' => '19.00 - 20.00',
                    'Sabtu' => '08.00 - 09.00',
                    'Minggu' => '15.00 - 16.00'
                ],
                'U-10' => [
                    'Senin' => '11.00 - 12.00',
                    'Selasa' => '15.00 - 16.00',
                    'Rabu' => '11.00 - 12.00',
                    'Kamis' => '14.00 - 15.00',
                    'Jumat' => '20.00 - 21.00',
                    'Sabtu' => '09.00 - 10.00',
                    'Minggu' => '16.00 - 17.00'
                ],
                'U-12' => [
                    'Senin' => '09.00 - 10.00',
                    'Selasa' => '13.00 - 14.00',
                    'Rabu' => '09.00 - 10.00',
                    'Kamis' => '15.00 - 16.00',
                    'Jumat' => '18.00 - 19.00',
                    'Sabtu' => '07.00 - 08.00',
                    'Minggu' => '14.00 - 15.00'
                ],
                'U-14' => [
                    'Senin' => '12.00 - 13.00',
                    'Selasa' => '16.00 - 17.00',
                    'Rabu' => '12.00 - 13.00',
                    'Kamis' => '17.00 - 18.00',
                    'Jumat' => '21.00 - 22.00',
                    'Sabtu' => '10.00 - 11.00',
                    'Minggu' => '17.00 - 18.00'
                ],
                'U-16' => [
                    'Senin' => '10.00 - 11.00',
                    'Selasa' => '14.00 - 15.00',
                    'Rabu' => '22.00 - 23.00',
                    'Kamis' => '13.00 - 14.00',
                    'Jumat' => '19.00 - 21.00',
                    'Sabtu' => '09.00 - 20.00',
                    'Minggu' => '22.00 - 23.00'
                ],
                'U-18' => [
                    'Senin' => '10.00 - 11.00',
                    'Selasa' => '14.00 - 15.00',
                    'Rabu' => '22.00 - 23.00',
                    'Kamis' => '16.00 - 17.00',
                    'Jumat' => '20.00 - 21.00',
                    'Sabtu' => '09.00 - 10.00',
                    'Minggu' => '15.00 - 16.00'
                ],
            ];
        @endphp

        @foreach ($tim as $kategori => $jadwal)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg border-0" style="border-radius: 15px;">
                <div class="card-header text-white" style="background: linear-gradient(45deg, #150c49, #123268); border-radius: 15px 15px 0 0;">
                    <h5 class="card-title mb-0 text-center" style="font-family: 'Poppins', sans-serif;">MFP {{ $kategori }}</h5>
                    <p class="text-center"><i class="fas fa-map-marker-alt"></i> Stadion MFP</p>
                </div>
                <div class="card-body" style="font-family: 'Roboto', sans-serif;">
                    <ul class="list-unstyled">
                        @foreach ($jadwal as $hari => $waktu)
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span><i class="fas fa-calendar-day"></i> {{ $hari }}</span>
                            <span class="badge bg-primary text-white p-2" style="border-radius: 10px;">{{ $waktu }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
