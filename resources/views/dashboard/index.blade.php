<!-- resources/views/dashboard/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        .custom-link {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .custom-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <i class="bi bi-ev-front mr-2"></i> <!-- Vehicle logo icon -->
            Admin Ride Portal
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container mb-3">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body text-center">
                        <h3>Registered Customers</h3>
                        <h2>{{ $customerCount }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body text-center">
                        <h3>Registered Drivers</h3>
                        <h2>{{ $driverCount }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning text-dark mb-4">
                    <div class="card-body text-center">
                        <h3>Completed Rides</h3>
                        <h2>{{ $completedRidesCount }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h3 class="text-center mt-5">Links</h3>
        <div class="mt-3 d-flex justify-content-center">
            <div class="mx-4">
                <a href="{{ route('customers.index') }}" class="btn btn-link font-weight-bold">Show Registered Customers</a>
            </div>
            <div class="mx-4">
                <a href="{{ route('drivers.index') }}" class="btn btn-link font-weight-bold">Show Registered Drivers</a>
            </div>
            <div class="mx-4">
                <a href="{{ route('rides.index') }}" class="btn btn-link font-weight-bold">Show Ride Requests</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
