@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="home-container">
        <header class="header">
            <div class="header-content">
                <h1>Selamat Datang di Website Kami</h1>
                <p>Platform untuk berbagi informasi tentang produk, berita terkini, dan diskusi.</p>
            </div>
        </header>

        <section class="carousel">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/2/4/0527e478-84f0-4040-904d-8ff95466b569.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </section>
        
        <section class="introduction">
            <h2>Tentang Kami</h2>
            <p>Website ini adalah platform yang didedikasikan untuk memfasilitasi berbagi informasi seputar produk-produk terbaru, berita terkini, dan ruang diskusi yang menginspirasi. Kami bertekad untuk memberikan pengalaman yang bermanfaat bagi pengguna dengan menyajikan konten-konten yang informatif, inspiratif, dan relevan. Dengan fokus pada kualitas dan keberagaman topik, kami mengundang pengguna untuk terlibat aktif dalam berbagai diskusi serta menjelajahi beragam produk yang sesuai dengan kebutuhan dan minat mereka.</p>
        </section>
        
        <section class="features">
            <h2>Fitur Utama</h2>
            <div class="feature-item" data-aos="fade-up">
                <h3>Produk</h3>
                <p>Informasi tentang produk terbaru kami.</p>
            </div>
            <div class="feature-item" data-aos="fade-up">
                <h3>Berita</h3>
                <p>Berita terkini tentang industri dan perusahaan kami.</p>
            </div>
            <div class="feature-item" data-aos="fade-up">
                <h3>Diskusi</h3>
                <p>Forum untuk berdiskusi dan berbagi pendapat.</p>
            </div>
        </section>
        
        <section class="cta">
            <a href="/products" class="btn btn-primary">Jelajahi Produk Kami</a>
            <a href="/discussions" class="btn btn-secondary">Bergabung dalam Diskusi</a>
        </section>
        
        <section class="social-media">
            <h2>Temukan Kami di Media Sosial</h2>
            <div class="social-icons">
                <a href="https://facebook.com" data-aos="fade-right"><img src="https://i.pinimg.com/564x/01/b2/85/01b2857eec42cb1e82c660849b4d054d.jpg" alt="Facebook" width="50"></a>
                <a href="https://twitter.com" data-aos="fade-right"><img src="https://i.pinimg.com/564x/2f/b9/09/2fb909b74a854f0715e64dda5825990d.jpg" alt="Twitter" width="50"></a>
                <a href="https://instagram.com" data-aos="fade-right"><img src="https://i.pinimg.com/564x/30/12/94/30129480e943e5b3e334394168ae16a2.jpg" alt="Instagram" width="50"></a>
            </div>
        </section>
        
        <section class="latest-news">
            <h2>Berita Terkini</h2>
            <ul>
                <li><a href="{{ url('/products') }}">Judul Artikel 1</a></li>
                <li><a href="#">Judul Artikel 2</a></li>
                <li><a href="#">Judul Artikel 3</a></li>
            </ul>
        </section>
        
        <section class="latest-products">
            <h2>Produk Terbaru</h2>
            <div class="product-list">
                <div class="product-item" data-aos="flip-left">
                    <img src="product1.jpg" alt="Produk 1">
                    <h3>Nama Produk 1</h3>
                    <p>Deskripsi singkat produk 1.</p>
                </div>
                <div class="product-item" data-aos="flip-left">
                    <img src="product2.jpg" alt="Produk 2">
                    <h3>Nama Produk 2</h3>
                    <p>Deskripsi singkat produk 2.</p>
                </div>
                <div class="product-item" data-aos="flip-left">
                    <img src="product3.jpg" alt="Produk 3">
                    <h3>Nama Produk 3</h3>
                    <p>Deskripsi singkat produk 3.</p>
                </div>
            </div>
        </section>
        
        <section class="presentation-video">
            <h2>Video Presentasi</h2>
            <div class="video-container" data-aos="zoom-in">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/video_id" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
        
        <section class="testimonials">
            <h2>Testimoni Pengguna</h2>
            <div class="testimonial" data-aos="fade-up">
                <blockquote>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis libero in dapibus faucibus."
                </blockquote>
                <cite>John Doe</cite>
            </div>
        </section>
    </div>
@endsection

@section('styles')
    <style>
        /* Animasi tambahan menggunakan library AOS (Animate On Scroll) */
        [data-aos] {
            opacity: 0;
            transition-property: opacity, transform;
        }

        [data-aos].aos-animate {
            opacity: 1;
        }

        @keyframes flip-left {
            0% {
                transform: perspective(400px) rotateY(0);
            }
            100% {
                transform: perspective(400px) rotateY(-180deg);
            }
        }

        @keyframes flip-right {
            0% {
                transform: perspective(400px) rotateY(0);
            }
            100% {
                transform: perspective(400px) rotateY(180deg);
            }
        }

        /* Custom animations */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                transform: scale(0);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            once: true, // Hanya menjalankan animasi sekali saat pertama kali load halaman
            duration: 1000 // Durasi animasi (ms)
        });
    </script>
@endsection
