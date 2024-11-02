<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Customers</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h4 class="text-center mb-4">Registered Customers</h4>
        <form method="GET" action="{{ route('customers.index') }}" class="mb-4">
            <div class="form-group">
                <label for="registered_date">Filter by Registration Date</label>
                <select name="registered_date" id="registered_date" class="form-select">
                    <option value="desc">Latest First</option>
                    <option value="asc">Earliest First</option>
                </select>
                <button type="submit" class="btn btn-primary ml-5 bt-sm">Filter</button>
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
                        <th>Sub County</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                            <td>{{ $customer->phone_number }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->county->name ?? 'N/A' }}</td>
                            <td> {{ optional($customer->subCounty)->name ?? 'N/A' }} </td>
                            <td>{{ $customer->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $customers->links('vendor.pagination.bootstrap-5') }}
    </div>
</body>
</html>
