<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <!-- Link ke CSS dari Laravel -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Link ke CSS khusus Anda -->
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Website</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/products">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="/news">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="/discussions">Diskusi</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Website. All rights reserved.</p>
        </div>
    </footer>

    <!-- Script untuk Bootstrap atau JS lainnya -->
</body>
</html>
