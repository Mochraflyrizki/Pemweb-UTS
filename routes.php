<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rute Bus</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }
        /* Styling untuk Header */
        header {
            background-color: #0d6efd;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            font-size: 24px;
        }
        /* Styling untuk Navigasi */
        nav {
            background-color: #0d6efd;
            padding: 10px;
        }
        nav ul {
            list-style: none;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        nav ul li a:hover {
            background-color: #0a58ca;
        }
        /* Styling untuk Tabel Rute */
        .route-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .route-table th, .route-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }
        .route-table th {
            background-color: #f1f1f1;
            font-weight: bold;
            color: #0d6efd;
        }
        .route-table tr:hover {
            background-color: #f9f9f9;
        }
        .price {
            color: #0d6efd;
            font-weight: bold;
        }
        .btn-book {
            background-color: #0d6efd;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
            transition: background-color 0.3s;
        }
        .btn-book:hover {
            background-color: #0a58ca;
        }
        footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #666;
            margin-top: 20px;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<header>
    <h1>Bus Ticket Booking - Rute Tersedia</h1>
</header>

<!-- Navigation Menu -->
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="routes.php">Routes</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
</nav>

<div class="container">
    <h2>Daftar Rute Tersedia</h2>
    <p>Berikut adalah daftar rute bus yang tersedia, lengkap dengan waktu keberangkatan, kedatangan, dan harga tiket:</p>

    <table class="route-table">
        <tr>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Waktu Keberangkatan</th>
            <th>Waktu Kedatangan</th>
            <th>Harga (IDR)</th>
            <th>Pesan</th>
        </tr>
        <?php
        // Simulasi data rute bus
        $routes = [
            ["origin" => "Jakarta", "destination" => "Bandung", "departure_time" => "08:00", "arrival_time" => "10:30", "price" => 150000],
            ["origin" => "Jakarta", "destination" => "Yogyakarta", "departure_time" => "09:00", "arrival_time" => "16:00", "price" => 300000],
            ["origin" => "Bandung", "destination" => "Surabaya", "departure_time" => "07:00", "arrival_time" => "18:00", "price" => 500000],
            ["origin" => "Yogyakarta", "destination" => "Malang", "departure_time" => "12:00", "arrival_time" => "20:00", "price" => 250000]
        ];

        foreach ($routes as $route) { ?>
        <tr>
            <td><?php echo $route['origin']; ?></td>
            <td><?php echo $route['destination']; ?></td>
            <td><?php echo $route['departure_time']; ?></td>
            <td><?php echo $route['arrival_time']; ?></td>
            <td class="price">IDR <?php echo number_format($route['price'], 0, ',', '.'); ?></td>
            <td><a href="booking.php?route_id=<?php echo urlencode($route['origin'] . '-' . $route['destination']); ?>" class="btn-book">Pesan Tiket</a></td>
        </tr>
        <?php } ?>
    </table>
</div>

<footer>
    &copy; 2023 Bus Ticket Booking System. All Rights Reserved.
</footer>

</body>
</html>
