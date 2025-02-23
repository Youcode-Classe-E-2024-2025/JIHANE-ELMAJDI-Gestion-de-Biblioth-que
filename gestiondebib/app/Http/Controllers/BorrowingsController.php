<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowingsController extends Controller
{
    public function borrow(string $book_id)
    {
        $book = \App\Models\Book::findOrFail($book_id);

        \App\Models\Borrowing::create([
            'user_id' => auth()->user()->id,
            'book_id' => $book->id,
            'borrow_date' => now(),
        ]);

        return redirect()->route('books.show', $book->id);
    }

    public function returnBook(string $book_id)
    {
        $book = \App\Models\Book::findOrFail($book_id);
        $borrowing = \App\Models\Borrowing::where('book_id', $book->id)
            ->where('user_id', auth()->user()->id)
            ->whereNull('return_date')
            ->firstOrFail();

        $borrowing->update([
            'return_date' => now(),
        ]);

        return redirect()->route('books.show', $book->id);
    }

    public function listBorrowedBooks(string $user_id)
    {
        $borrowings = \App\Models\Borrowing::where('user_id', $user_id)
            ->whereNull('return_date')
            ->whereHas('book')
            ->get();

        return view('borrowings.index', compact('borrowings'));
    }
}
