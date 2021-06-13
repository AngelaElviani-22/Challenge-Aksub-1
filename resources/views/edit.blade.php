<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hadiah Aksub</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <div class="container">
        <h1>Edit Book</h1>
            <form action="{{route('book.update', $book->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                  <label class="form-label">Book Title</label>
                  <input name="book_title" class="form-control" value="{{$book->title}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input name="desc" class="form-control" value="{{$book->description}}">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Price</label>
                  <input name="price" class="form-control" type="number" value="{{$book->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </body>
</html>