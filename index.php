<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="brand">Brand Bus</div>
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="routes.php">Rute</a>
        <a href="booking.">Booking</a>
    </div>
    <div class="auth">
        <a href="#">Masuk</a>
        <a href="#">Daftar</a>
    </div>
</div>

<!-- Hero Section -->
<div class="hero-section">
    <!-- Left Side Text -->
    <div class="hero-text">
        <h1>Yuk, cari tiket bus dan travel terbaik untuk kebutuhanmu.</h1>
    </div>

    <!-- Search Form -->
    <div class="search-form">
        <div class="form-group">
            <label for="departure">Pilih lokasi keberangkatan</label>
            <input type="text" id="departure" placeholder="Masukkan lokasi keberangkatan">
        </div>
        <div class="form-group">
            <label for="destination">Mau ke mana?</label>
            <input type="text" id="destination" placeholder="Masukkan tujuan">
        </div>
        <div class="form-group">
            <label for="date">Tanggal</label>
            <input type="date" id="date">
        </div>
        <div class="form-group date-options">
            <button class="active">Hari ini</button>
            <button>Besok</button>
        </div>
        <div class="form-group">
            <label for="seats">Jumlah Kursi</label>
            <select id="seats">
                <option>1 Kursi</option>
                <option>2 Kursi</option>
                <option>3 Kursi</option>
                <option>4 Kursi</option>
            </select>
        </div>
        <button>Pesan Bus</button>
    </div>
</div>

<!-- Kontak Kami Section -->
<div class="contact-section">
    <h2>Kontak Kami</h2>
    <div class="contact-info">
        <div class="contact-item">
            <i class="fas fa-comment-dots"></i>
            <div class="contact-text">
                <h4>WhatsApp</h4>
                <p>+62 858 1150 0888</p>
            </div>
        </div>
        <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <div class="contact-text">
                <h4>Email</h4>
                <p>cs@brandbus.com</p>
            </div>
        </div>
        <div class="contact-item">
            <i class="fas fa-headset"></i>
            <div class="contact-text">
                <h4>Pusat Panggilan</h4>
                <p>Khusus Indonesia<br>+62 804 1500 878</p>
                <p>Internasional<br>+62 21 3973 0888</p>
            </div>
        </div>
    </div>
</div>

<!-- Rute Bus Populer Section -->
<div class="popular-routes-section">
    <h2>Rute Bus Populer</h2>
    <div class="tabs">
        <span class="tab active">Rute Bus Paling Ramai!</span>
        <span class="tab">Rute Bus Lainnya</span>
    </div>
    <div class="routes-container active" id="popular-routes">
        <div class="route-item">Bus Surabaya-Jakarta</div>
        <div class="route-item">Bus Jakarta-Jogja</div>
        <div class="route-item">Bus Jakarta-Surabaya</div>
        <div class="route-item">Bus Malang-Jakarta</div>
        <div class="route-item">Bus Surabaya-Bali</div>
        <div class="route-item">Bus Palembang-Jakarta</div>
        <div class="route-item">Bus Semarang-Jakarta</div>
        <div class="route-item">Bus Surabaya-Bandung</div>
        <div class="route-item">Bus Jakarta-Lampung</div>
        <div class="route-item">Bus Bali-Jakarta</div>
        <div class="route-item">Bus Padang-Jakarta</div>
        <div class="route-item">Bus Jakarta-Padang</div>
    </div>
    <div class="routes-container" id="other-routes">
        <div class="route-item">Bus Jogja-Jakarta</div>
        <div class="route-item">Bus Jakarta-Malang</div>
        <div class="route-item">Bus Bandung-Surabaya</div>
        <div class="route-item">Bus Malang- Bali</div>
    </div>
</div>

</body>
</html>
