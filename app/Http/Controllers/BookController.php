<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Http\Requests;
use App\Book;
Use App\Http\Resources\Book as BookResource;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get books
        $books = Book::paginate(15);

        // Return collection of articles as a resource
        return BookResource::collection($books);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = $request->isMethod('put') ? Book::findOrFail($request->book_id) : new Book;
        $book->id = $request->input('book_id');
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->genre = $request->input('genre');
        $book->author_id = $request->input('author_id');

        if($book->save()) {
            return new BookResource($book);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get single book
        $book = Book::findOrFail($id);

        //Return single book as e resource
        return new BookResource($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get single book
        $book = Book::findOrFail($id);

        // Delete signle book
        if($book->delete()){
            return new BookResource($book);
        }
        
    }
}
