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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        body {
            background-color: #ffffff; /* Background putih */
            font-family: Arial, sans-serif;
        }

        .jumbotron {
            background-color: #a2c2f3;
            color: white;
            padding: 30px;
            border-radius: 0;
        }

        .navbar {
            background-color: #007bff; /* Biru Tua */
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f200 !important;
        }

        .container {
            margin-top: 20px;
        }

        /* Styling untuk tabel */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Row ganjil dan genap berbeda warna */
        tr:nth-child(odd) {
            background-color: #f2f2f2; /* Warna abu-abu terang */
        }

        tr:nth-child(even) {
            background-color: #ffffff; /* Warna putih */
        }

        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>5026231158 : Kayla Putri Maharani</h1>
    </div>

    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/frontend">All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/monitor">Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keranjang">Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Latihan 3</a>
            </li>
        </ul>
    </nav>
    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
