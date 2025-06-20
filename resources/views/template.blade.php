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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #007bff;
            --secondary-blue: #4dc2ff;
            --darker-blue: #0056b3;
            --light-blue-hover: #e0f2ff;

            --background-body: #f8f9fa;
            --background-card: #ffffff;
            --text-primary: #343a40;
            --text-secondary: #6c757d;
            --border-light: #dee2e6;
            --shadow-light: rgba(0, 0, 0, 0.05);

            --navbar-bg: #212529;
            --navbar-link-hover: var(--darker-blue);
        }

        body {
            background-color: var(--background-body);
            font-family: 'Lato', sans-serif;
            margin: 0;
            line-height: 1.6;
            color: var(--text-primary);
        }

        .jumbotron {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            margin-bottom: 0;
            padding: 70px 20px;
            text-align: center;
            box-shadow: 0 4px 15px var(--shadow-light);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .jumbotron h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: -0.8px;
        }

        .jumbotron p {
            font-size: 1.2rem;
            font-weight: 300;
            opacity: 0.95;
            max-width: 700px;
            margin: 0 auto;
        }

        .navbar {
            background-color: var(--navbar-bg);
            padding: 6px 0;
            box-shadow: 0 2px 8px var(--shadow-light);
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .navbar .container {
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-brand {
            color: white !important;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1.6rem;
            letter-spacing: -0.5px;
            padding-top: 0;
            padding-bottom: 0;
            line-height: 1;
        }

        .navbar-toggler {
            padding: 0.3rem 0.5rem;
            font-size: 1rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 0.25rem;
            height: fit-content;
        }

        .navbar-toggler-icon {
            height: 1em;
            width: 1em;
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.7%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            padding: 8px 18px;
            font-size: 1rem;
            transition: all 0.3s ease;
            border-radius: 6px;
            margin: 0 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1.2;
        }

        .navbar-nav .nav-link:hover {
            background-color: var(--navbar-link-hover);
            color: white !important;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            transform: translateY(0);
        }

        .navbar-nav .nav-item i {
            margin-right: 8px;
            font-size: 1rem;
        }

        .navbar-nav,
        .navbar-collapse {
            margin-bottom: 0;
            margin-top: 0;
        }

        .container {
            padding-top: 40px;
            padding-bottom: 60px;
        }

        table {
            width: 100%;
            margin-top: 35px;
            border-collapse: separate;
            border-spacing: 0;
            background-color: var(--background-card);
            box-shadow: 0 5px 20px var(--shadow-light);
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 18px 25px;
            text-align: left;
            font-size: 0.95rem;
            border-bottom: 1px solid var(--border-light);
        }

        tr:last-child td {
            border-bottom: none;
        }

        th {
            background-color: var(--primary-blue);
            color: white;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        th:first-child { border-top-left-radius: 10px; }
        th:last-child { border-top-right-radius: 10px; }

        tr:nth-child(even) {
            background-color: var(--background-body);
        }

        tr:hover {
            background-color: var(--light-blue-hover);
            transition: background-color 0.2s ease;
        }

        @media (max-width: 991.98px) {
            .jumbotron {
                padding: 50px 20px;
            }
            .jumbotron h1 {
                font-size: 2.5rem;
            }
            .jumbotron p {
                font-size: 1rem;
            }

            .navbar {
                padding: 4px 0;
            }
            .navbar-nav .nav-item {
                display: block;
                width: 100%;
                text-align: left;
            }
            .navbar-nav .nav-link {
                padding: 8px 15px;
                margin: 4px 0;
                font-size: 0.95rem;
            }
            .navbar-brand {
                font-size: 1.2rem;
            }
            .navbar-toggler {
                padding: 0.2rem 0.4rem;
                font-size: 0.9rem;
            }
            th, td {
                padding: 14px 18px;
                font-size: 0.9rem;
            }
            table {
                margin-top: 25px;
            }
        }

        @media (max-width: 575.98px) {
            .jumbotron {
                padding: 40px 15px;
            }
            .jumbotron h1 {
                font-size: 2rem;
            }
            .jumbotron p {
                font-size: 0.9rem;
            }
            .navbar-nav .nav-link {
                font-size: 0.9rem;
                padding: 6px 10px;
            }
            .navbar-brand {
                font-size: 1rem;
            }
            th, td {
                padding: 10px 12px;
                font-size: 0.8rem;
            }
        }

        .footer {
            background-color: var(--navbar-bg);
            color: rgba(255, 255, 255, 0.7);
            text-align: center;
            padding: 25px;
            margin-top: 60px;
            font-size: 0.85rem;
            box-shadow: 0 -2px 10px var(--shadow-light);
        }

        .footer p {
            margin: 0;
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>

<body>
    <header class="jumbotron">
        <h1>Kayla Putri Maharani</h1>
        <p>5026231158</p>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-lg-none" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
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
                        <a class="nav-link" href="/eas"><i class="fas fa-code"></i> EAS</a>
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
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

</body>

</html>
