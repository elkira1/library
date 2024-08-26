<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
</head>
<body>

    <h1 class="text-center font-italic font-weight-bold">BookPage</h1>
    <p class="text-center font-weight-bold">-Welcome to our User BookPage Interface!-</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-info me-md-2" href="{{ route('app_dashboard') }}" role="button">Home</a>
    </div>
    <p></p>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
    <th>ISBN</th>
    <th>Title</th>
    <th>Author</th>
    <th>Category</th>
    <th>Year of Publish</th>
    <th>Number of Page</th>
    <th>Editor</th>
    <th>Language</th>
    <th>Id Fournisseur</th>
    <th>Statut</th>
    <th>Cover</th>
    <th width="280px">Action</th>
</tr>
@foreach ($books as $book)
<tr>
    <td>{{ $book->ISBN  }}</td>
    <td>{{ $book->Title  }}</td>
    <td>{{ $book->Author  }}</td>
    <td>{{ $book->Category  }}</td>
    <td>{{ $book->PublisherYear  }}</td>
    <td>{{ $book->PageNbr  }}</td>
    <td>{{ $book->Editor  }}</td>
    <td>{{ $book->Language  }}</td>
    <td>{{ $book->fournisseur_id  }}</td>
    <td>{{ $book->Statut  }}</td>
    <td><img src="{{ Storage::url($book->Cover) }}" alt="Cover" style="max-width: 100px;"></td>
    <td>
        <a class="btn btn-success" href="{{ Storage::url($book->files) }}" target="_blank"> Lire </a>
        <a class="btn btn-info" href="{{route('emprunt.userindex')}}">Faire un Emprunt</a>
    </td>
</tr>
@endforeach
</table>

@include('script')


</body>
</html>

