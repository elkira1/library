<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    @section('title', 'Reader-edit')
</head>

    <div class=" container row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Reader Information</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lecteur.index') }}"> Back</a>
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

    <form action="{{ route('lecteur.update',$reader->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class=" container row">
               <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <strong>First Name:</strong>
                    <input type="text" name="FirstName" value="{{ $reader->FirstName }}" class="form-control"  required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Last Name:</strong>
                        <input type="text" name="LastName" value="{{ $reader->LastName }}" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Birth Date:</strong>
                        <input type="texte" name="Address" value="{{ $reader->BirthDate}}" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        <input type="texte" name="Gender" value="{{ $reader->Gender }}" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Date of Register:</strong>
                        <input type="texte" name="RegisterDate" value="{{ $reader->RegisterDate }}" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Occupation:</strong>
                        <input type="texte" name="Occupation" value="{{ $reader->Occupation }}" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="texte" name="Address" value="{{ $reader->Address }}" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="Email" value="{{ $reader->Email }}" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 mt-2">
                    <div class="form-group">
                        <strong>Phone:</strong>
                        <input type="texte" name="Phone" value="{{ $reader->Phone }}" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

