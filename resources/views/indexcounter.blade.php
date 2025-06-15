@extends('template')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 rounded-4 shadow">
                    <div class="card-body text-center py-5">
                        <div class="mb-4">
                            <i class="bi bi-person-fill display-3 text-primary"></i>
                        </div>
                        <h3 class="card-title mb-3 fw-bold text-dark">Statistik Pengunjung</h3>
                        <p class="card-text fs-3 text-secondary mb-4">
                            Anda pengunjung ke <span class="fs-1 text-primary">{{ $jumlah }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Styling card */
        .card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .card-body {
            padding: 40px;
        }

        /* Icon Styling */
        .bi-person-fill {
            color: #3498db;
        }

        /* Title styling */
        .card-title {
            font-size: 2rem;
            font-weight: 600;
            color: #333;
        }

        /* Text styling */
        .card-text {
            font-size: 1.5rem;
            color: #555;
        }

        .text-primary {
            color: #3498db !important;
        }

        /* Hover effect for card */
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.15);
        }
    </style>

    <!-- Adding link to Bootstrap Icons CDN for better display -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

@endsection
