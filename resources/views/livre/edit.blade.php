<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    @section('title', 'livres-edit')
</head>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Book Information</h2>
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

    <form action="{{ route('livre.update',$book->ISBN) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>ISBN:</strong>
                    <input type="text" name="ISBN" value="{{ $book->ISBN }}" class="form-control"  required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Title:</strong>
                        <input type="text" name="Title" value="{{ $book->Title }}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Author:</strong>
                        <input type="text" name="Author" value="{{ $book->Author }}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Category:</strong>
                        <input type="text" name="Category" value="{{ $book->Category }}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Year of Publish:</strong>
                        <input type="text" name="PublisherYear" value="{{ $book->PublisherYear}}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Number of Page:</strong>
                        <input type="text" name="PageNbr" value="{{ $book->PageNbr }}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Editor:</strong>
                        <input type="text" name="Editor" value="{{ $book->Editor }}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Language:</strong>
                        <input type="text" name="Language" value="{{ $book->Language }}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Id of Fournisseur:</strong>
                        <input type="text" name="fournisseur_id" value="{{ $book->fournisseur_id }}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Statut:</strong>
                        <input type="text" name="Statut" value="{{ $book->Statut }}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                        <strong>Cover:</strong>
                        <input type="file" name="Cover" value="{{ $book->Cover }}" class="form-control" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">

                    <strong>PDF File:</strong>
                    <input type="file" name="files" value="{{ $book->files }}"  class="form-control" required accept=".pdf">

                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

