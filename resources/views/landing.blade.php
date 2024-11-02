<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Ride Portal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        html, body {
            height: 100%;
            margin: 0;          
        }
        .hero {
            background: url('https://source.unsplash.com/1600x900/?transport,ride') no-repeat center center;
            background-size: cover;
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            flex-direction: column;
        }
        .feature-icon {
            font-size: 50px;
            color: #007bff;
        }
        .card {
            border: none;
            transition: transform 0.2s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <i class="bi bi-ev-front mr-2"></i> <!-- Vehicle logo icon -->
            Ride Portal
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="content text-center">
            <h1 class="display-5" style="color: #222324;">
                <i class="bi bi-ev-front mr-2"></i> <!-- Vehicle logo in header -->
                Welcome to the Ride Portal
            </h1>
            <p class="lead" style="color: #101213;">Your one-stop solution for managing rides, customers, and drivers.</p>
            <a class="btn btn-light btn-lg" href="{{ route('login') }}" role="button">Get Started</a>
        </div>
    </header>

    <div class="container mt-1 bg-light">
        <h2 class="text-center">About the Portal</h2>
        <p class="text-center">This portal provides administrators with the tools to manage:</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center mb-4">
                    <div class="card-body">
                        <i class="fas fa-users feature-icon"></i>
                        <h5 class="card-title">Registered Customers</h5>
                        <p class="card-text">View and filter customers by registration date.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-4">
                    <div class="card-body">
                        <i class="fas fa-user-tie feature-icon"></i>
                        <h5 class="card-title">Registered Drivers</h5>
                        <p class="card-text">View drivers with filtering options by county and sub-county.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-4">
                    <div class="card-body">
                        <i class="fas fa-car feature-icon"></i>
                        <h5 class="card-title">Ride Requests</h5>
                        <p class="card-text">Monitor all ride requests in the system, sorted by date.</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center">Login to access the dashboard and view a summary of all registered drivers, customers, and completed rides.</p>
    </div>

    <footer class="text-center mt-5 py-4 bg-light">
        <p>© {{ date('Y') }} Ride Portal. All rights reserved.</p>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
