<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Drivers</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h4 class="text-center mb-4">Registered Drivers</h4>
        <form method="GET" action="{{ route('drivers.index') }}" class="mb-4">
            <div class="form-row">
                <div class="col">
                    <select name="county" class="form-control" onchange="this.form.submit()">
                        <option value="">Select County</option>
                        @foreach($counties as $county)
                            <option value="{{ $county->id }}" {{ request('county') == $county->id ? 'selected' : '' }}>
                                {{ $county->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select name="subcounty" class="form-control" onchange="this.form.submit()">
                        <option value="">Select Sub-County</option>
                        @foreach($subcounties as $subcounty)
                            <option value="{{ $subcounty->id }}" {{ request('subcounty') == $subcounty->id ? 'selected' : '' }}>
                                {{ $subcounty->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>County</th>
                        <th>Status</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drivers as $driver)
                        <tr>
                            <td>{{ $driver->first_name }} {{ $driver->last_name }}</td>
                            <td>{{ $driver->phone_number }}</td>
                            <td>{{ $driver->email }}</td>
                            <td>{{ $driver->county->name ?? 'N/A' }}</td>
                            <td>{{ $driver->status }}</td>
                            <td>{{ $driver->created_at}}</td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $drivers->links('vendor.pagination.bootstrap-5') }} <!-- Pagination Links -->
    </div>
</body>
</html>
