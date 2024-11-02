<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            max-width: 400px; /* Set maximum width for the card */
            margin: auto; /* Center the card */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>Register</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ url('/register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="pin">PIN (4-digit)</label>
                        <input type="password" name="password" class="form-control" required maxlength="4"> <!-- Ensure this matches -->
                        <small class="form-text text-muted">Please enter a 4-digit numeric PIN.</small>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>

                <p class="mt-3 text-center">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
