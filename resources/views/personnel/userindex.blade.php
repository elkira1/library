<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    @section('title', 'Staff')
</head>
<body>
    <h1 class="text-center font-italic font-weight-bold">StaffPage</h1>
    <p class="text-center font-weight-bold">-Discover our great Staff !-</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary me-md-2" href="{{ route('app_dashboard') }}" role="button">Home</a>
    </div>
    <h1></h1>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Birth Date</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Position</th>
        <th width="150px">Action</th>
    </tr>
    @foreach ($staffs as $staff)
    <tr>
        <td>{{ $staff->id  }}</td>
        <td>{{ $staff->FirstName  }}</td>
        <td>{{ $staff->LastName  }}</td>
        <td>{{ $staff->Gender  }}</td>
        <td>{{ $staff->BirthDate }}</td>
        <td>{{ $staff->Phone  }}</td>
        <td>{{ $staff->Address  }}</td>
        <td>{{ $staff->Position  }}</td>

        <td>
                <a class="btn btn-info" href="#">Show More</a>

        </td>
    </tr>
    @endforeach
</table>

    @include('script')
</body>
</html>








