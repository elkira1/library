<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    @section('title', 'Return-Add')
</head>
<div class="container">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>Add New Return Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('retourner.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('retourner.store') }}" method="POST">
        @csrf

        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <strong>Reader ID:</strong>
                    <input type="text" name="lecteur_id" class="form-control" placeholder="Reader" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <strong>Staff ID:</strong>
                    <input type="text" name="personnel_id" class="form-control" placeholder="Staff" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Borrow ID:</strong>
                        <input type="text" name="emprunt_id" class="form-control" placeholder="Borrow" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Statut:</strong>
                        <input type="text" name="Statut" class="form-control" placeholder="Statut" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Return Date:</strong>
                        <input type="date" name="DateReturn" class="form-control" placeholder="Date" required>
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>



