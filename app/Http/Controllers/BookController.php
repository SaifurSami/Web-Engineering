<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return "Hello Motherchod";
        // $books = Book::where('price', '>', 90)->get();
        // $books = Book::whereBetween('price', [30, 50])
        // ->where('stock','>',3)
        // // ->where('author','!=','John')
        // // ->orderBy('title')
        // ->orderBy('id')
        // ->get();
        $books = Book::paginate(10);
        return view("books.index")->with("books", $books);
        // return view("books.index", compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return "HI";
        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            "title" => "required",
            "author" => "required",
            'price' => "required|numeric",
            'isbn'=>"required|size:13",
            'stock' =>"required|numeric|integer|gte:0",
        ];

        $message = [
            'stock-gte' => 'The stock must be greater than or equal o',
        ];
        $request->validate($rules,$message);
//one way to do
        // $book = new Book();
        // $book->title = $request->title;
        // $book->author = $request->author;
        // $book->price = $request->price;
        // $book->isbn = $request->isbn;
        // $book->stock = $request->stock;
        // $book->save();

        //another way to do
        $book = Book::create($request->all());

        // return redirect()->route("books.index");
        return redirect()->route("books.show",$book->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // return "Showing Book with ID = ".$id;
        $book = Book::find($id);
        // return view('books.index')->with('books', $book);
        return view('books.show')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}
