<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
        @section('title', 'Utilisateur')

    </head>

<body>

    <h1 class="text-center font-italic font-weight-bold">UserPage</h1>
    <p class="text-center font-weight-bold">-Manage User Account !-</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-info me-md-2" href="{{ route('app_dashboard') }}" role="button">Home</a>
    </div>
    <h1></h1>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('utilisateur.create') }}"> Add New User</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th width="280px">Action</th>

        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <form action="{{ route('utilisateur.destroy', $user->id) }}" method="GET">

                    <a class="btn btn-primary" href="{{ route('utilisateur.edit',$user->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>

</body>
</html>


