<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    @section('title', 'Reader-add')
</head>
<div class="container">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>Add New Reader</h2>
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

    <form action="{{ route('lecteur.store') }}" method="POST">
        @csrf

        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <strong>ID:</strong>
                    <input type="text" name="id" class="form-control" placeholder="ID" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <strong>First Name:</strong>
                    <input type="text" name="FirstName" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Last Name:</strong>
                        <input type="text" name="LastName" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Date Of Birth:</strong>
                        <input type="date" name="BirthDate" class="form-control" placeholder="Date of Birth" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        <input type="text" name="Gender" class="form-control" placeholder="Gender" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Registration Date:</strong>
                        <input type="date" name="RegisterDate" class="form-control" placeholder="Register Date" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Occupation:</strong>
                        <input type="text" name="Occupation" class="form-control" placeholder="Occupation" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="Address" class="form-control" placeholder="Address" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="Email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Phone:</strong>
                        <input type="text" name="Phone" class="form-control" placeholder="Phone" required>
                    </div>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>



