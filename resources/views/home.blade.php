@extends('layouts.app')

@section('title', 'Home Page')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        /* Tambahan CSS khusus untuk halaman ini */
        .home-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header-content {
            max-width: 600px;
            margin: 0 auto;
        }
        .carousel-item img {
            border-radius: 8px;
        }
        .introduction {
            margin-bottom: 30px;
        }
        .features {
            display: flex;
            flex-direction: column;
            align-items: center; /* Posisikan item di tengah */
            margin-bottom: 30px;
        }
        .feature-item {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
            width: 300px;
            max-width: 100%;
        }
        .cta {
            text-align: center;
            margin-bottom: 30px;
        }
        .social-media {
            text-align: center;
            margin-bottom: 30px;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }
        .latest-news, .latest-products {
            margin-bottom: 30px;
        }
        .product-list {
            display: flex;
            justify-content: space-around;
        }
        .product-item {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            width: 250px;
        }
        .presentation-video {
            text-align: center;
            margin-bottom: 30px;
        }
        .testimonials {
            text-align: center;
        }
        .testimonial {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
@endsection

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
    <h2 class="text-center mb-4" data-aos="fade-up">Fitur Utama</h2>
    <div class="row">
        <div class="col-lg-4 mb-4" data-aos="fade-up">
            <div class="feature-item text-center p-4 shadow-sm">
                <h3>Produk</h3>
                <p>Informasi tentang produk terbaru kami.</p>
            </div>
        </div>
        <div class="col-lg-4 mb-4" data-aos="fade-up">
            <div class="feature-item text-center p-4 shadow-sm">
                <h3>Berita</h3>
                <p>Berita terkini tentang industri dan perusahaan kami.</p>
            </div>
        </div>
        <div class="col-lg-4 mb-4" data-aos="fade-up">
            <div class="feature-item text-center p-4 shadow-sm">
                <h3>Diskusi</h3>
                <p>Forum untuk berdiskusi dan berbagi pendapat.</p>
            </div>
        </div>
    </div>
</section>

        
        <section class="cta" data-aos="fade-up">
            <a href="/products" class="btn btn-primary">Jelajahi Produk Kami</a>
            <a href="/discussions" class="btn btn-secondary">Bergabunglah dalam Diskusi</a>
        </section>
        
        <section class="social-media">
            <h2>Temukan Kami di Media Sosial</h2>
            <div class="social-icons">
                <a href="https://facebook.com" data-aos="zoom-in"><img src="https://i.pinimg.com/564x/01/b2/85/01b2857eec42cb1e82c660849b4d054d.jpg" alt="Facebook" width="50"></a>
                <a href="https://twitter.com" data-aos="zoom-in"><img src="https://i.pinimg.com/564x/cc/31/6f/cc316f97197528e5e26e613a93ab16a4.jpg" alt="Twitter" width="50"></a>
                <a href="https://instagram.com" data-aos="zoom-in"><img src="https://i.pinimg.com/564x/30/12/94/30129480e943e5b3e334394168ae16a2.jpg" alt="Instagram" width="50"></a>
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
                    <img src="https://i.pinimg.com/564x/30/c7/48/30c748c5e207100a7e595b7889df0736.jpg" alt="Produk 1" width="300" height="200">
                    <h3>Nama Produk 1</h3>
                    <p>Deskripsi singkat produk 1.</p>
                </div>
                <div class="product-item" data-aos="flip-right">
                    <img src="https://i.pinimg.com/564x/a5/ab/51/a5ab51df3934e4d15c7bf0223570b5af.jpg" alt="Produk 2" width="300" height="200">
                    <h3>Nama Produk 2</h3>
                    <p>Deskripsi singkat produk 2.</p>
                </div>
                <div class="product-item" data-aos="flip-left">
                    <img src="https://i.pinimg.com/564x/13/06/33/130633022eb01145159b879cb4911933.jpg" alt="Produk 3" width="300" height="200">
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
    <div class="testimonial" data-aos="fade-up">
        <blockquote>
            "Website ini sangat membantu saya dalam mencari inspirasi desain interior untuk rumah saya. Terima kasih banyak!"
        </blockquote>
        <cite>Maria S.</cite>
    </div>
    <div class="testimonial" data-aos="fade-up">
        <blockquote>
            "Saya menemukan banyak informasi bermanfaat tentang produk-produk terbaru di sini. Sangat membantu untuk membuat keputusan belanja yang cerdas."
        </blockquote>
        <cite>Budi T.</cite>
    </div>
    <div class="testimonial" data-aos="fade-up">
        <blockquote>
            "Forum diskusi di website ini sangat informatif. Saya bisa bertukar pendapat dengan pengguna lain dan mendapatkan perspektif baru."
        </blockquote>
        <cite>Sarah W.</cite>
    </div>
    <div class="testimonial" data-aos="fade-up">
        <blockquote>
            "Pengalaman berbelanja di website ini sangat memuaskan. Produknya berkualitas dan pengiriman tepat waktu."
        </blockquote>
        <cite>John D.</cite>
    </div>
    <div class="testimonial" data-aos="fade-up">
        <blockquote>
            "Saya senang dengan layanan pelanggan yang responsif. Mereka selalu siap membantu dan menjawab pertanyaan saya dengan cepat."
        </blockquote>
        <cite>Anisa R.</cite>
    </div>
</section>

        
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
        });
    </script>
@endsection
