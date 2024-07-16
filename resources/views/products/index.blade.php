<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <style>
        /* CSS khusus untuk produk */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product-card {
            width: 250px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            width: 100%;
            height: 250px; /* Ukuran gambar disesuaikan */
            object-fit: cover;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .product-card .info {
            padding: 15px;
            text-align: left;
        }
        .product-card h2 {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #333;
        }
        .product-card p {
            color: #666;
            margin-top: 5px;
            font-size: 0.9rem;
            line-height: 1.4;
        }
        .product-card .price {
            font-weight: bold;
            color: #f39c12;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Daftar Produk</h1>

    <div class="products">
        <!-- Product Card 1 -->
        <div class="product-card">
            <img src="https://i.pinimg.com/564x/b7/18/67/b71867bc0050dc14adda55da46ed02bb.jpg" alt="Product Image">
            <div class="info">
                <h2>Nama Produk 1</h2>
                <p>Deskripsi singkat produk ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="price">Rp 100.000</p>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="product-card">
            <img src="https://i.pinimg.com/564x/5f/63/eb/5f63ebc5e12a365a01c671a002dcb4f1.jpg" alt="Product Image">
            <div class="info">
                <h2>Nama Produk 2</h2>
                <p>Deskripsi singkat produk ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="price">Rp 150.000</p>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="product-card">
            <img src="https://i.pinimg.com/564x/cf/6c/45/cf6c45e3f6906eaabb213c9aa2a470cf.jpg" alt="Product Image">
            <div class="info">
                <h2>Nama Produk 3</h2>
                <p>Deskripsi singkat produk ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="price">Rp 200.000</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
