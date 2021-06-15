<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Author Name</th>
            <th scope="col">Book Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->author->name}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <a href="{{route('book.edit', $book->id)}}" class="btn btn-success">Edit</a>
                    <form action="{{route('book.delete', $book->id)}}" method="post">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
          </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>