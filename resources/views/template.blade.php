<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kayla Putri Maharani : 5026231158</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f4f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }

        /* Jumbotron with a softer background */
        .jumbotron {
            background: linear-gradient(to right, #2d9fff, #007bff);
            color: white;
            margin-bottom: 0;
            padding: 50px 20px;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: 600;
        }

        /* Navbar with a darker background */
        .navbar {
            background-color: #1d1f2a;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav {
            text-align: center;
            width: 100%;
        }

        .navbar-nav .nav-item {
            display: inline-block;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 10px 20px;
            font-size: 16px;
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: #f8f200;
            color: #343a40 !important;
            border-radius: 5px;
        }

        .navbar-nav .nav-item i {
            margin-right: 8px;
        }

        .container {
            margin-top: 30px;
        }

        /* Clean Styling for Table */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
        }

        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

    </style>
</head>

<body>
    <!-- Jumbotron Section -->
    <div class="jumbotron">
        <h1>5026231158 : Kayla Putri Maharani</h1>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container mt-0">
            <ul class="navbar-nav mx-auto d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="/frontend"><i class="fas fa-laptop-code"></i> Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai"><i class="fas fa-users"></i> Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/monitor"><i class="fas fa-tv"></i> Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fas fa-code"></i> EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/keranjang"><i class="fas fa-cart-plus"></i> Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan"><i class="fas fa-users-cog"></i> Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/counter"><i class="fas fa-clock"></i> Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
