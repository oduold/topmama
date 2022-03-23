<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller {
    public function allBooks() {
        return response()->json(Book::all());
    }

    public function oneBook($id) {
        return response()->json(Book::find($id));
    }
    
    public function create(Request $request)
    {
        $book = Book::create($request->all());
        
        return response()->json($book, 201);
    }
    
    public function update($id, Request $request)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        
        return response()->json($book, 200);
    }
    
    public function delete($id)
    {
        Book::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}