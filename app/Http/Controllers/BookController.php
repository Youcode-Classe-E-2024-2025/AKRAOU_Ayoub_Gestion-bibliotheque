<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all()->where('user_id', null);
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    public function borrow(Request $request, Book $book)
    {
        $book->user_id = Auth::id();
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book borrowed successfully!');
    }

    public function myBooks()
    {
        $books = Book::where('user_id', Auth::id())->get();
        return view('books.my_books', compact('books'));
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }

    public function return(Book $book)
    {
        if ($book->user_id === Auth::id()) {
            $book->user_id = null;
            $book->save();
            return redirect()->route('books.my_books')->with('success', 'Book returned successfully!');
        }
        return redirect()->route('books.my_books')->with('error', 'You cannot return this book.');
    }
}
