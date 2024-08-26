<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    @section('title', 'Borrow')
</head>
<body>

    <h1 class="text-center font-italic font-weight-bold">BorrowBookPage</h1>
    <p class="text-center font-weight-bold">-Here is the Borrow books store !-</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary me-md-2" href="{{ route('app_dashboard') }}" role="button">Home</a>
    </div>
    <h1></h1>
    <div class="pull-right">
        <a class="btn btn-success" href="{{route('emprunt.create')}}"> Add New Borrow</a>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

<table class="table table-bordered">
    <tr>
        <th>ID Borrow</th>
        <th>ID Reader </th>
        <th>ID Example</th>
        <th>Statut</th>
        <th>Borrow Date</th>
        <th width="180px">Action</th>
    </tr>
    @foreach ($borrows as $borrow)
    <tr>
        <td>{{ $borrow->id  }}</td>
        <td>{{ $borrow->lecteur_id  }}</td>
        <td>{{ $borrow->exemplaire_id  }}</td>
        <td>{{ $borrow->Statut  }}</td>
        <td>{{ $borrow->DateEmprunt  }}</td>
        <td>
            <form action="#" method="GET">

                <a class="btn btn-info" href="#">Show</a>
            </form>
        </td>
    </tr>
    @endforeach
</table>

    @include('script')

</body>
