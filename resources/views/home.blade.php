@extends('app')

@section('content')
    <div class="home-container">
        <header>
            <h1>Selamat Datang di Website Kami</h1>
        </header>
        
        <section class="carousel">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </section>
        
        <section class="introduction">
            <h2>Tentang Kami</h2>
            <p>Website ini adalah platform untuk berbagi informasi tentang produk, berita, dan diskusi.</p>
        </section>
        
        <section class="features">
            <h2>Fitur Utama</h2>
            <div class="feature-item">
                <h3>Produk</h3>
                <p>Informasi tentang produk terbaru kami.</p>
            </div>
            <div class="feature-item">
                <h3>Berita</h3>
                <p>Berita terkini tentang industri dan perusahaan kami.</p>
            </div>
            <div class="feature-item">
                <h3>Diskusi</h3>
                <p>Forum untuk berdiskusi dan berbagi pendapat.</p>
            </div>
        </section>
        
        <section class="cta">
            <a href="/products" class="btn btn-primary">Jelajahi Produk Kami</a>
            <a href="/discussions" class="btn btn-secondary">Bergabunglah dalam Diskusi</a>
        </section>
        
        <section class="social-media">
            <h2>Temukan Kami di Media Sosial</h2>
            <div class="social-icons">
                <a href="https://facebook.com"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="https://twitter.com"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="https://instagram.com"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
        </section>
        
        <section class="latest-news">
            <h2>Berita Terkini</h2>
            <ul>
                <li><a href="#">Judul Artikel 1</a></li>
                <li><a href="#">Judul Artikel 2</a></li>
                <li><a href="#">Judul Artikel 3</a></li>
            </ul>
        </section>
        
        <section class="latest-products">
            <h2>Produk Terbaru</h2>
            <div class="product-list">
                <div class="product-item">
                    <img src="product1.jpg" alt="Produk 1">
                    <h3>Nama Produk 1</h3>
                    <p>Deskripsi singkat produk 1.</p>
                </div>
                <div class="product-item">
                    <img src="product2.jpg" alt="Produk 2">
                    <h3>Nama Produk 2</h3>
                    <p>Deskripsi singkat produk 2.</p>
                </div>
                <div class="product-item">
                    <img src="product3.jpg" alt="Produk 3">
                    <h3>Nama Produk 3</h3>
                    <p>Deskripsi singkat produk 3.</p>
                </div>
            </div>
        </section>
        
        <section class="presentation-video">
            <h2>Video Presentasi</h2>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/video_id" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
        
        <section class="testimonials">
            <h2>Testimoni Pengguna</h2>
            <div class="testimonial">
                <blockquote>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis libero in dapibus faucibus."
                </blockquote>
                <cite>John Doe</cite>
            </div>
        </section>
        
    </div>
@endsection
