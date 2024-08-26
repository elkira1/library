<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    @section('title', 'Borrow-add')
</head>
<div class="container">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>Add New Borrow</h2>
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

    <form action="{{ route('emprunt.store') }}" method="POST">
        @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <strong>ID Borrow:</strong>
                    <input type="text" name="id" class="form-control" placeholder="ID" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Reader:</strong>
                        <select name='lecteur_id' id='lecteur_id' required>
                            <?php

                                $pdo = new PDO('mysql:host=localhost;dbname=bookstore', 'root', '');


                                      $readers = $pdo->query('SELECT * FROM lecteurs')->fetchAll(PDO::FETCH_ASSOC);


                                      foreach ($readers as $reader) {
                                          echo '<option value="' . $reader['id'] . '">' . $reader['FirstName'] ." ".$reader['LastName'] . '</option>';
                                      }
                             ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <strong>Statut:</strong>
                    <input type="text" name="Statut" class="form-control" placeholder="Statut" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Emprunt Date:</strong>
                        <input type="date" name="DateEmprunt" class="form-control" placeholder="Date of Emprunt" required>
                    </div>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>



