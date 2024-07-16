@extends('layouts.app')

@section('title', 'Berita')

@section('content')
    <link rel="stylesheet" href="{{ asset('24-news/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('24-news/css/style_1.css') }}">
    <link rel="stylesheet" href="{{ asset('24-news/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('24-news/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('24-news/css/media_query.css') }}">
    <link rel="stylesheet" href="{{ asset('24-news/css/animate.css') }}">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            margin-bottom: 30px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333333;
        }

        .card-text {
            font-size: 1rem;
            color: #555555;
            line-height: 1.6;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #ffffff;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .footer {
            background-color: #f8f9fa;
            border-top: 1px solid #e7e7e7;
            margin-top: 30px;
            padding: 15px 0;
            text-align: center;
        }
    </style>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Berita Terbaru</h1>

        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2016/06/10/100b022f-0940-4711-988a-483d33b5c8db_43.jpg?w=700&q=90" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 1</h5>
                        <p class="card-text">Deskripsi singkat tentang berita 1.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Berita 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://i.pinimg.com/564x/20/80/46/208046709cd779af1d0c6332e0bb698c.jpg" class="card-img-top" alt="Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 2</h5>
                        <p class="card-text">Deskripsi singkat tentang berita 2.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Berita 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://i.pinimg.com/564x/35/69/1e/35691eceb45d579102905e7d0a5bd4b6.jpg" class="card-img-top" alt="Berita 3">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 3</h5>
                        <p class="card-text">Deskripsi singkat tentang berita 3.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Berita 4 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://i.pinimg.com/564x/34/87/26/3487266cfc91ba153fb1bdff012e97e4.jpg" class="card-img-top" alt="Berita 4">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 4</h5>
                        <p class="card-text">Deskripsi singkat tentang berita 4.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Berita 5 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://i.pinimg.com/564x/28/3f/2b/283f2bb148f6ed51aab57f62dcf0aad6.jpg" class="card-img-top" alt="Berita 5">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 5</h5>
                        <p class="card-text">Deskripsi singkat tentang berita 5.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Berita 6 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://i.pinimg.com/564x/8d/05/d2/8d05d237fd6817800da57101b0f2a99b.jpg" class="card-img-top" alt="Berita 6">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 6</h5>
                        <p class="card-text">Deskripsi singkat tentang berita 6.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
