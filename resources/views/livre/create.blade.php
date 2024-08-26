<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    @section('title', 'Add Book')
</head>
<div class="container">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>Add New Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('livre.index') }}"> Back</a>
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
    <form action="{{ route('livre.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <strong>ISBN:</strong>
                    <input type="text" name="ISBN" class="form-control" placeholder="ISBN" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <strong>Title:</strong>
                    <input type="text" name="Title" class="form-control" placeholder="Title" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">

                        <strong>Author:</strong>
                        <input type="text" name="Author" class="form-control" placeholder="Author" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">

                        <strong>Category:</strong>
                        <input type="text" name="Category" class="form-control" placeholder="Category" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">

                        <strong>Year of Publish:</strong>
                        <input type="date" name="PublisherYear" class="form-control" placeholder="Publish Year" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                        <strong>Number of Page:</strong>
                        <input type="text" name="PageNbr" class="form-control" placeholder="Number of Page" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                        <strong>Editor:</strong>
                        <input type="text" name="Editor" class="form-control" placeholder="Editor" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                        <strong>Language:</strong>
                        <input type="text" name="Language" class="form-control" placeholder="Language" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Fournisseur:</strong>
                        <select name='fournisseur_id' id='fournisseur_id' required>
                            <?php

                                $pdo = new PDO('mysql:host=localhost;dbname=bookstore', 'root', '');


                                      $suppliers = $pdo->query('SELECT * FROM fournisseurs')->fetchAll(PDO::FETCH_ASSOC);


                                      foreach ($suppliers as $supplier) {
                                          echo '<option value="' . $supplier['id'] . '">' . $supplier['FirstName'] ." ".$supplier['LastName'] . '</option>';
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
                        <strong>Cover:</strong>
                        <input type="file" name="Cover" class="form-control" placeholder="Cover" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                        <strong>PDF File:</strong>
                        <input type="file" name="files" class="form-control" required accept=".pdf">
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>



