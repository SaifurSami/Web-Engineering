@extends('books.layout')
@section('page-content')
    <p>Showing Details for ID : {{$book->id}} </p>


    {{-- {{$book->title}} --}}
    <table border="1" width="500">
        <tr>
            <th>Book ID</th>
            <th>Book Title</th>
            <th>Book Author</th>
            <th>Book Price</th>
            <th>Book ISBN</th>
            <th>Book Stock</th>
        </tr>
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->isbn}}</td>
            <td>{{$book->stock}}</td>
            {{-- <td>{{$book->id}}</th> --}}
        </tr>
        </table>
        <a class="btn btn-primary" href="{{route('books.index')}}">Back</a>
        @endsection

