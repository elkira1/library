<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    @section('title', 'Return Book')
</head>
<body>
    <h1 class="text-center font-italic font-weight-bold">ReturnBookPage</h1>
    <p class="text-center font-weight-bold">-Show all books return !-</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-info me-md-2" href="{{ route('app_dashboard') }}" role="button">Home</a>
    </div>
    <h1></h1>
    <div class="pull-right">
        <a class="btn btn-success" href="{{route('retourner.create')}}"> Add New Return Book</a>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Reader</th>
        <th>Borrow</th>
        <th>Statut</th>
        <th>Return Date</th>

        <th width="280px">Action</th>
    </tr>
    @foreach ($returns as $return)
    <tr>
        <td>{{ $return->id  }}</td>
        <td>{{ $return->lecteur_id  }}</td>
        <td>{{ $return->emprunt_id  }}</td>
        <td>{{ $return->Statut }}</td>
        <td>{{ $return->DateReturn  }}</td>
        <td>
            <form action="{{ route('retourner.destroy',$return->id) }}" method="GET">


                <a class="btn btn-primary" href="{{ route('retourner.edit',$return->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

    @include('script')
</body>
</html>









