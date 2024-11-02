<!-- resources/views/rides/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Requests</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Add Bootstrap CDN -->
</head>
<body>
    <div class="container mt-5">
        <h4>Ride Requests</h4>
        <form method="GET" action="{{ route('rides.index') }}" class="mb-4"> <!-- Add margin bottom to the form -->
            <div class="form-group">
                <label for="registered_date">Filter by Registration Date</label>
                <select name="registered_date" id="registered_date" class="form-control col-3" onchange="this.form.submit()">
                    <option value="desc" {{ request('registered_date') == 'desc' ? 'selected' : '' }}>Latest First</option>
                    <option value="asc" {{ request('registered_date') == 'asc' ? 'selected' : '' }}>Earliest First</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Filter</button>
        </form>
        <table class="table table-hover table-bordered table-sm"> <!-- Add table-hover for row highlighting -->
            <thead class="thead-dark"> <!-- Use Bootstrap dark header style -->
                <tr>
                    <th>Pickup Point</th>
                    <th>Dropoff Point</th>
                    <th>Passengers</th>
                    <th>Status</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rides as $ride)
                    <tr>
                        <td>{{ $ride->pickup_point }}</td>
                        <td>{{ $ride->dropoff_point }}</td>
                        <td>{{ $ride->passengers }}</td>
                        <td>{{ ucfirst($ride->status) }}</td>
                        <td>{{ $ride->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $rides->links('vendor.pagination.bootstrap-5') }} <!-- Pagination Links -->
    </div>
</body>
</html>
