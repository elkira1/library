<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    @section('title', 'lecteur')
</head>
<body>

    <h1 class="text-center font-italic font-weight-bold">ReaderPage</h1>
    <p class="text-center font-weight-bold">- Reader  Member Lists !-</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-info me-md-2" href="{{ route('app_dashboard') }}" role="button">Home</a>
    </div>
    <p></p>
    <h1></h1>
    <div class="pull-right">
        <a class="btn btn-success" href="{{route('lecteur.create')}}"> Add New Reader</a>
    </div>
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
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Date Of Register</th>
        <th>Occupation</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($readers as $reader)
    <tr>
        <td>{{ $reader->id  }}</td>
        <td>{{ $reader->FirstName  }}</td>
        <td>{{ $reader->LastName  }}</td>
        <td>{{ $reader->BirthDate  }}</td>
        <td>{{ $reader->Gender  }}</td>
        <td>{{ $reader->RegisterDate  }}</td>
        <td>{{ $reader->Occupation  }}</td>
        <td>{{ $reader->Address  }}</td>
        <td>{{ $reader->Email  }}</td>
        <td>{{ $reader->Phone  }}</td>
        <td>
            <form action="#" method="GET">


                <a class="btn btn-primary" href="{{ route('lecteur.edit',$reader->id) }}">Edit</a>

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
