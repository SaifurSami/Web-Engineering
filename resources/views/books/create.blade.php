@extends('books.layout')
@section('page-content')


<legend>New Form</legend>
<form method="post" action="{{route('books.store')}}">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" value="{{old('title')}}">
    <div>{{$errors->first('title')}}</div>
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" name="author" value="{{old('author')}}">
    <div>{{$errors->first('author')}}</div>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" value="{{old('price')}}">
    <div>{{$errors->first('price')}}</div>
  </div>
  <div class="mb-3">
    <label for="isbn" class="form-label">Isbn</label>
    <input type="text" class="form-control" name="isbn" value="{{old('isbn')}}">
    <div>{{$errors->first('isbn')}}</div>
  </div>
  <div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="text" class="form-control" name="stock" value="{{old('stock')}}">
    <div>{{$errors->first('stock')}}</div>
  </div>
  {{-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

</form> --}}

<button type="submit" class="btn btn-primary">Submit</button>
<div style="text-align: right;">
    <a class="btn btn-primary" href="{{route('books.index')}}">Back</a>
</div>

@endsection
