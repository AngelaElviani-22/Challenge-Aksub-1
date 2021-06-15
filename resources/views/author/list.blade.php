<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Authors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Author Name</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <th scope="row">{{$author->id}}</th>
                <td>
                    <a href="{{route('author.detail', $author->id)}}">{{$author->name}}</a>
                </td>
                <td>{{$author->address}}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>