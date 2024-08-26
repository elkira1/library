<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    @section('title', 'Borrow-edit')
</head>

    <div class=" container row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Borrow Information</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('emprunt.index') }}"> Back</a>
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

    <form action="{{ route('emprunt.update',$borrow->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class=" container row">
               <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <strong>Reader ID:</strong>
                    <input type="text" name="lecteur_id" value="{{ $borrow->lecteur_id }}" class="form-control"  required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Statut:</strong>
                        <input type="text" name="Statut" value="{{ $borrow->Statut }}" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Borrow Date:</strong>
                        <input type="date" name="Gender" value="{{ $borrow->DateEmprunt }}" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

