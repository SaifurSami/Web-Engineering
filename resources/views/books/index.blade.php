@extends('books.layout')
   @section('page-content')
    <p class="text-end">
        <a class="btn btn-primary" href="{{route('books.create')}}">New Book</a>
    </p>
    <table class="table table-stripted table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Details</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->id }}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->price}}</td>
            <td><a class="btn btn-primary" href="{{route('books.show',$book->id)}}">View</a> |
            <form method="post" action="{{route('books.destroy',$book->id)}}" onsubmit="return confirm('Sure?')">
                @csrf
                @method('DELETE')
                <input class = "btn btn-primary" type="submit" value="Delete">
                </form>
            </td>
            {{-- <td><a class="btn btn-primary" href="{{route('books.show',$book->id)}}">Delete></td> --}}
        </tr>
        @endforeach
    </table>


    {{$books->links()}}
    @endsection











{{--
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html> --}}
